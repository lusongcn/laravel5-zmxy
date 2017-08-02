<?php
namespace Earnp\Zmxy\Libarys\Zmop;

use Earnp\Zmxy\Libarys\Zmop\RSAUtil;
use Earnp\Zmxy\Libarys\Zmop\WebUtil;
use Earnp\Zmxy\Libarys\lotusphp_runtime\Logger\LtLogger;
class ZmopClient {
	//应用ID
	public $appId;
	//私钥文件路径，绝对路径或者相对路径
	public $privateKeyFilePath;

	//芝麻公钥文件路径，绝对路径或者相对路径
	public $zhiMaPublicKeyFilePath;
	//网关
	public $gatewayUrl;
	//返回数据格式
	public $format = "json";
	//api版本
	public $apiVersion = "1.0";

	// 表单提交字符集编码
	public $charset = "UTF-8";

	//签名类型
	protected $signType = "RSA";

	//参数
	private $signParam = 'sign';
	private $bizParam = "params";

	function __construct($gatewayUrl = '', $appId = '', $charset = 'UTF-8', $privateKeyFilePath, $zhiMaPublicKeyFilePath){
		$this -> gatewayUrl = $gatewayUrl;
		$this -> appId = $appId;
		$this -> privateKeyFilePath = $privateKeyFilePath;
        $this->  zhiMaPublicKeyFilePath = $zhiMaPublicKeyFilePath;
		$this -> charset = $charset;
	}

	/**
	 * 执行请求
	 * @param $request 请求对象
	 * @param $filePath 要上传文件的绝对路径
	 * @return bool|mixed
	 * @throws Exception
	 */
	public function execute($request) {
		$apiParamsQuery = $this->getBizParamStr($request);
		$sysParams = $this->getSystemParams($request);
		$sysParams[$this->signParam] = RSAUtil::sign($apiParamsQuery, $this->privateKeyFilePath);


		//加密,只对业务参数进行加密
		$encryptedApiParams[$this->bizParam] = RSAUtil::rsaEncrypt($apiParamsQuery, $this->zhiMaPublicKeyFilePath);

		//如果是文件上传，那么需要把文件参数也放到POST数组里面
		$files = $request->getFileParas();
		if($files != null){
			foreach ($files as $k => $v) {
				$encryptedApiParams [$k] = WebUtil::getFilePath ($v);
			}
		}

		//系统参数放入GET请求串
		$requestUrl = $this->gatewayUrl . "?";
		$requestUrl .= WebUtil::buildQueryWithEncode($sysParams);

		//发起HTTP请求
		try {
			$resp = WebUtil::curl($requestUrl, $encryptedApiParams ,$this->charset);
		} catch (Exception $e) {
			$this->logCommunicationError($sysParams["method"], $requestUrl, "HTTP_ERROR_" . $e->getCode(), $e->getMessage());
			return false;
		}

		//解析ZMOP返回结果
		$respWellFormed = false;
		if ("json" == $this->format) {
			$respObject = json_decode($resp);
			$biz_response = $this->get_biz_response($respObject);
			$encrypted = $respObject->encrypted;
			if($encrypted){
				$biz_response = RSAUtil::rsaDecrypt($biz_response, $this->privateKeyFilePath);
			}
			$bizRespObject = json_decode($biz_response);
			if (null !== $respObject) {
				$respWellFormed = true;
			}
		}

		//返回的HTTP文本不是标准JSON，记下错误日志
		if (false === $respWellFormed) {
			$this->logCommunicationError($sysParams["method"], $requestUrl, "HTTP_RESPONSE_NOT_WELL_FORMED", $resp);
			return false;
		}

        if(isset($respObject->biz_response_sign)){
            $bizResponseSign = $respObject->biz_response_sign;
            $verifyResult = RSAUtil::verify($biz_response, $bizResponseSign, $this->zhiMaPublicKeyFilePath);
            if($verifyResult == false){
                throw new Exception("验签失败:".$resp);
            }
        }

		//如果ZMOP返回了错误码，记录到业务错误日志中
		if (isset ($bizRespObject->error_code)) {
			// $logger = new LtLogger;
			// $logger->conf["log_file"] = rtrim(ZMOP_SDK_WORK_DIR, '\\/') . '/' . "logs/zmop_biz_err_" . $this->appId . "_" . date("Y-m-d") . ".log";
			// // $logger->log(array(
			// 		date("Y-m-d H:i:s"),
			// 		$resp
			// 	));
		}
		return $bizRespObject;
	}

	/**
	 * 对于page_redirect类型的接口调用,生成用来调用这种类型接口的url,便于在浏览器中使用
	 * @param $request 接口请求
	 * @return string 用于在浏览器中访问的url
	 */
	public function generatePageRedirectInvokeUrl($request){
		$apiParamsQuery = $this->getBizParamStr($request);
		$systemParams = $this->getSystemParams($request);
		$systemParams[$this->signParam] = RSAUtil::sign($apiParamsQuery, $this->privateKeyFilePath);
		$systemQueryParams = WebUtil::buildQueryWithEncode($systemParams);

		$url = $this->gatewayUrl;
		$url .= ('?' . $systemQueryParams);


		$bizParam =  RSAUtil::rsaEncrypt($apiParamsQuery, $this->zhiMaPublicKeyFilePath);
		$url .= ('&'. $this->bizParam .'='.urlencode($bizParam));
		return $url;
	}

	/**
	 * 1. 先解密，再验签
	 * 2. 如果验签成功，然后返回解密后的值
	 * 3. 如果验签失败，抛出异常
	 * @param $encryptedResponse 加密后的返回值
	 * @param $sign 签名(对未加密的返回值的签名)
	 * @return string 解密后的明文
	 * @throws Exception
	 */
	public function decryptAndVerifySign($encryptedResponse, $sign){
		$decryptedResponse = RSAUtil::rsaDecrypt($encryptedResponse, $this->privateKeyFilePath);
		$success = RSAUtil::verify($decryptedResponse, $sign, $this->zhiMaPublicKeyFilePath);
		if($success){
			return $decryptedResponse;
		}else{
			throw new Exception("验签失败:".$decryptedResponse);
		}
	}

	/**
	 * 为业务参数生成签名
	 * @param $request
	 * @return string
	 */
	public function generateSign($request){
		$paramStr = $this->getBizParamStr($request);
		return RSAUtil::sign($paramStr, $this->privateKeyFilePath);
	}

	/**
	 * 为业务参数生成签名并进行UrlEncode
	 * @param $request
	 * @return string
	 */
	public function generateSignWithUrlEncode($request){
		$paramStr = generateSign($request);
		return urlencode($paramStr);
	}

	/**
	 * 为业务参数加密
	 * @param $request
	 * @return string
	 */
	public function generateEncryptedParam($request){
		$paramStr = $this->getBizParamStr($request);
		return RSAUtil::rsaEncrypt($paramStr, $this->zhiMaPublicKeyFilePath);
	}

	/**
	 * 为业务参数加密
	 * @param $request
	 * @return string
	 */
	public function generateEncryptedParamWithUrlEncode($request){
		$paramStr = generateEncryptedParam($request);
		return urlencode($paramStr);
	}

	/**
	 * 从总的返回值中获取业务返回值
	 * @param $obj
	 * @return null
	 */
	private function get_biz_response($obj){
		$attrArray = get_object_vars($obj);
		foreach ($attrArray as $paraKey => $paraValue) {
			//如果属性名以_reponse结尾，该属性对应的值为业务返回值
			if(strrchr($paraKey, "_response") == "_response"){
				return $paraValue;
			}
		}
		return NULL;
	}

	private function getBizParamStr($request){
		$apiParams = $request->getApiParas();
		$apiParamsQuery = WebUtil::buildQueryWithEncode($apiParams);
		return $apiParamsQuery;
	}

	private function getSystemParams($request){
		if (WebUtil::checkEmpty($this->charset)) {
			$this->charset = "UTF-8";
		}

		$iv=null;
		if(!WebUtil::checkEmpty($request->getApiVersion())){
			$iv=$request->getApiVersion();
		}else{
			$iv=$this->apiVersion;
		}

		//组装系统参数
		$sysParams["app_id"] = $this->appId;
		$sysParams["version"] = $iv;
		$sysParams["method"] = $request->getApiMethodName();
		$sysParams["charset"] = $this->charset;
		$sysParams["scene"] = $request->getScene();
		$sysParams["channel"] = $request->getChannel();
		$sysParams["platform"] = $request->getPlatform();
		$sysParams["ext_params"] = $request->getExtParams();
		return $sysParams;
	}

	/**
	 * 记录错误日志
	 * @param $apiName
	 * @param $requestUrl
	 * @param $errorCode
	 * @param $responseTxt
	 */
	private function logCommunicationError($apiName, $requestUrl, $errorCode, $responseTxt) {
		$localIp = isset ($_SERVER["SERVER_ADDR"]) ? $_SERVER["SERVER_ADDR"] : "CLI";
		// $logger = new LtLogger;
		// $logger->conf["log_file"] = rtrim(ZMOP_SDK_WORK_DIR, '\\/') . '/' . "logs/zmop_comm_err_" . $this->appId . "_" . date("Y-m-d") . ".log";
		// $logger->conf["separator"] = "^_^";
		// $logData = array(
			// date("Y-m-d H:i:s"),
			// $apiName,
			// $this->appId,
			// $localIp,
			// PHP_OS,
			// $requestUrl,
			// $errorCode,
			// str_replace("\n", "", $responseTxt)
		// );
		// $logger->log($logData);
	}
}