<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.customer.certification.result.sync request
 *
 * @author auto create
 * @since 1.0, 2017-04-20 19:49:37
 */
class ZhimaCustomerCertificationResultSyncRequest
{
	/** 
	 * 一次认证的唯一标识,在商户调用认证初始化接口的时候获取
	 **/
	private $bizNo;
	
	/** 
	 * 各渠道认证状态,失败原因,材料等信息
	 **/
	private $channelStatuses;
	
	/** 
	 * 认证失败的错误码
	 **/
	private $errorCode;
	
	/** 
	 * 认证失败的错误信息
	 **/
	private $errorMessage;
	
	/** 
	 * 扩展业务参数
	 **/
	private $extBizParam;
	
	/** 
	 * 识别后的主体信息,入参有传就和入参的certify_identity一致
	 **/
	private $identifiedPrincipal;
	
	/** 
	 * 商户id,商户在芝麻的唯一标识
	 **/
	private $merchantId;
	
	/** 
	 * 认证是否通过
	 **/
	private $passed;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setBizNo($bizNo)
	{
		$this->bizNo = $bizNo;
		$this->apiParas["biz_no"] = $bizNo;
	}

	public function getBizNo()
	{
		return $this->bizNo;
	}

	public function setChannelStatuses($channelStatuses)
	{
		$this->channelStatuses = $channelStatuses;
		$this->apiParas["channel_statuses"] = $channelStatuses;
	}

	public function getChannelStatuses()
	{
		return $this->channelStatuses;
	}

	public function setErrorCode($errorCode)
	{
		$this->errorCode = $errorCode;
		$this->apiParas["error_code"] = $errorCode;
	}

	public function getErrorCode()
	{
		return $this->errorCode;
	}

	public function setErrorMessage($errorMessage)
	{
		$this->errorMessage = $errorMessage;
		$this->apiParas["error_message"] = $errorMessage;
	}

	public function getErrorMessage()
	{
		return $this->errorMessage;
	}

	public function setExtBizParam($extBizParam)
	{
		$this->extBizParam = $extBizParam;
		$this->apiParas["ext_biz_param"] = $extBizParam;
	}

	public function getExtBizParam()
	{
		return $this->extBizParam;
	}

	public function setIdentifiedPrincipal($identifiedPrincipal)
	{
		$this->identifiedPrincipal = $identifiedPrincipal;
		$this->apiParas["identified_principal"] = $identifiedPrincipal;
	}

	public function getIdentifiedPrincipal()
	{
		return $this->identifiedPrincipal;
	}

	public function setMerchantId($merchantId)
	{
		$this->merchantId = $merchantId;
		$this->apiParas["merchant_id"] = $merchantId;
	}

	public function getMerchantId()
	{
		return $this->merchantId;
	}

	public function setPassed($passed)
	{
		$this->passed = $passed;
		$this->apiParas["passed"] = $passed;
	}

	public function getPassed()
	{
		return $this->passed;
	}

	public function getApiMethodName()
	{
		return "zhima.customer.certification.result.sync";
	}

	public function setScene($scene)
	{
		$this->scene=$scene;
	}

	public function getScene()
	{
		return $this->scene;
	}
	
	public function setChannel($channel)
	{
		$this->channel=$channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}
	
	public function setPlatform($platform)
	{
		$this->platform=$platform;
	}

	public function getPlatform()
	{
		return $this->platform;
	}

	public function setExtParams($extParams)
	{
		$this->extParams=$extParams;
	}

	public function getExtParams()
	{
		return $this->extParams;
	}	

	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function getFileParas()
	{
		return $this->fileParas;
	}

	public function setApiVersion($apiVersion)
	{
		$this->apiVersion=$apiVersion;
	}

	public function getApiVersion()
	{
		return $this->apiVersion;
	}

}
