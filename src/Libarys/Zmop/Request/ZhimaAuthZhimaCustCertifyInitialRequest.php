<?php
/**
 * ZHIMA API: zhima.auth.zhima.cust.certify.initial request
 *
 * @author auto create
 * @since 1.0, 2016-03-31 14:34:57
 */
class ZhimaAuthZhimaCustCertifyInitialRequest
{
	/** 
	 * 业务扩展属性：
来源类型source_type必传，比如：
1.web场景中，传入{“source_type”:"pc"}
2.移动端场景中，传入{“source_type”:"h5"}
	 **/
	private $bizParams;
	
	/** 
	 * 与芝麻信用签订的合约外标，即使合约改签或续签该值不会发生变化
	 **/
	private $contractFlag;
	
	/** 
	 * 不同身份类型的参数列表，json字符串的key-value格式：
如：
identity_type= "CERT_AND_MOBILE";
identity_param={"certNo":"xxx", "name":"张三", "certType":"IDENTITY_CARD"};
	 **/
	private $identityParam;
	
	/** 
	 * 身份标识类型（后续可以扩展）：
BY_CERTNO_AND_NAME:按照身份证+姓名（+手机号）进行授权
	 **/
	private $identityType;
	
	/** 
	 * 当前使用的产品码
	 **/
	private $productCode;
	
	/** 
	 * 芝麻认证过程中的冗余字段，在认证申请时传入，在结果页面回调中原样透传给商户端。
【建议使用方式】用于商户端唯一标记发起认证的用户信息，在接收到芝麻信用认证结果回调后确定用户
	 **/
	private $state;
	
	/** 
	 * 商户传入的业务流水号。此字段由商户生成，需确保唯一性，用于定位每一次请求，后续按此流水进行对帐。生成规则: 固定30位数字串，前17位为精确到毫秒的时间
	 **/
	private $transactionId;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setBizParams($bizParams)
	{
		$this->bizParams = $bizParams;
		$this->apiParas["biz_params"] = $bizParams;
	}

	public function getBizParams()
	{
		return $this->bizParams;
	}

	public function setContractFlag($contractFlag)
	{
		$this->contractFlag = $contractFlag;
		$this->apiParas["contract_flag"] = $contractFlag;
	}

	public function getContractFlag()
	{
		return $this->contractFlag;
	}

	public function setIdentityParam($identityParam)
	{
		$this->identityParam = $identityParam;
		$this->apiParas["identity_param"] = $identityParam;
	}

	public function getIdentityParam()
	{
		return $this->identityParam;
	}

	public function setIdentityType($identityType)
	{
		$this->identityType = $identityType;
		$this->apiParas["identity_type"] = $identityType;
	}

	public function getIdentityType()
	{
		return $this->identityType;
	}

	public function setProductCode($productCode)
	{
		$this->productCode = $productCode;
		$this->apiParas["product_code"] = $productCode;
	}

	public function getProductCode()
	{
		return $this->productCode;
	}

	public function setState($state)
	{
		$this->state = $state;
		$this->apiParas["state"] = $state;
	}

	public function getState()
	{
		return $this->state;
	}

	public function setTransactionId($transactionId)
	{
		$this->transactionId = $transactionId;
		$this->apiParas["transaction_id"] = $transactionId;
	}

	public function getTransactionId()
	{
		return $this->transactionId;
	}

	public function getApiMethodName()
	{
		return "zhima.auth.zhima.cust.certify.initial";
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
