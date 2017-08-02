<?php
/**
 * ZHIMA API: zhima.credit.skynetrisk.get request
 *
 * @author auto create
 * @since 1.0, 2016-10-13 18:51:23
 */
class ZhimaCreditSkynetriskGetRequest
{
	/** 
	 * 支付宝登陆号
	 **/
	private $alipayLogonId;
	
	/** 
	 * 身份证号码
	 **/
	private $certNo;
	
	/** 
	 * 合约外标，服务标识。签约过后将会收到含有该服务标识的邮件，或者向协同您签约的芝麻合作人员索取。
	 **/
	private $contractFlag;
	
	/** 
	 * 手机号码
	 **/
	private $mobile;
	
	/** 
	 * 姓名
	 **/
	private $name;
	
	/** 
	 * 主体类型和对应参数
使用身份证信息查询填cert，对应cert_no和name参数必填；
使用支付宝登陆账号查询填alipayLogonId，对应alipay_logon_id参数必填；
使用支付宝用户ID查询填userId，对应user_id参数必填；
使用手机号查询填mobile，对应mobile参数必填
	 **/
	private $principalType;
	
	/** 
	 * 产品码，固定为w1010100000000001000
	 **/
	private $productCode;
	
	/** 
	 * transaction_id是代表一笔请求的唯一标志，该标识作为对账的关键信息，对于用户使用相同transaction_id的查询，芝麻在一天（86400秒）内返回首次查询数据，超过有效期的查询即为无效并返回异常（错误码xxxx），有效期内的重复查询不重新计费。 transaction_id 推荐生成方式是：30位，（其中17位时间值（精确到毫秒）：yyyyMMddHHmmssSSS）加上（13位自增数字：1234567890123）
	 **/
	private $transactionId;
	
	/** 
	 * 支付宝账号ID
	 **/
	private $userId;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setAlipayLogonId($alipayLogonId)
	{
		$this->alipayLogonId = $alipayLogonId;
		$this->apiParas["alipay_logon_id"] = $alipayLogonId;
	}

	public function getAlipayLogonId()
	{
		return $this->alipayLogonId;
	}

	public function setCertNo($certNo)
	{
		$this->certNo = $certNo;
		$this->apiParas["cert_no"] = $certNo;
	}

	public function getCertNo()
	{
		return $this->certNo;
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

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setPrincipalType($principalType)
	{
		$this->principalType = $principalType;
		$this->apiParas["principal_type"] = $principalType;
	}

	public function getPrincipalType()
	{
		return $this->principalType;
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

	public function setTransactionId($transactionId)
	{
		$this->transactionId = $transactionId;
		$this->apiParas["transaction_id"] = $transactionId;
	}

	public function getTransactionId()
	{
		return $this->transactionId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "zhima.credit.skynetrisk.get";
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
