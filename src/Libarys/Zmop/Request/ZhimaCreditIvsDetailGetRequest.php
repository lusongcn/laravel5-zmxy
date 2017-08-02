<?php
/**
 * ZHIMA API: zhima.credit.ivs.detail.get request
 *
 * @author auto create
 * @since 1.0, 2016-07-29 18:46:29
 */
class ZhimaCreditIvsDetailGetRequest
{
	/** 
	 * 用户地址，最多输入三个，多个地址之间用|分隔，如 杭州市西湖区天目山路266号|杭州市西湖区万塘路999号。

备注：证件号、姓名、手机号、地址、银行卡、电子邮箱至少传其中两项
	 **/
	private $address;
	
	/** 
	 * 银行卡号，最多输入两个，多个银行卡号之间用|分隔，如602436748024138|622536748024139。
备注：证件号、姓名、手机号、地址、银行卡、电子邮箱至少传其中两项
	 **/
	private $bankCard;
	
	/** 
	 * 证件号。
备注：证件号、姓名、手机号、地址、银行卡、电子邮箱必须传其中两项
	 **/
	private $certNo;
	
	/** 
	 * 证件类型。
备注：证件号、姓名、手机号、地址、银行卡、电子邮箱至少传其中两项
	 **/
	private $certType;
	
	/** 
	 * 电子邮箱，最多传入两个，多个邮箱之间用|分隔，如jnlxhy@alitest.com|john.sss@alitest.com。
备注：证件号、姓名、手机号、地址、银行卡、电子邮箱必至少传其中两项
	 **/
	private $email;
	
	/** 
	 * 国际移动设备标志
	 **/
	private $imei;
	
	/** 
	 * 国际移动用户识别码
	 **/
	private $imsi;
	
	/** 
	 * ip地址
	 **/
	private $ip;
	
	/** 
	 * 物理地址
	 **/
	private $mac;
	
	/** 
	 * 手机号，最多传入三个，多个手机号之间用|分隔，如15256797367|18669152789。
备注：证件号、姓名、手机号、地址、银行卡、电子邮箱至少传其中两项
	 **/
	private $mobile;
	
	/** 
	 * 姓名。
备注：证件号、姓名、手机号、地址、银行卡、电子邮箱至少传其中两项
	 **/
	private $name;
	
	/** 
	 * 产品码
	 **/
	private $productCode;
	
	/** 
	 * transaction_id是代表一笔请求的唯一标志，该标识作为对账的关键信息，对于用户使用相同transaction_id的查询，芝麻在一天（86400秒）内返回首次查询数据，超过有效期的查询即为无效并返回异常（错误码xxxx），有效期内的重复查询不重新计费。 transaction_id 推荐生成方式是：30位，（其中17位时间值（精确到毫秒）：yyyyMMddHHmmssSSS）加上（13位自增数字：1234567890123）
	 **/
	private $transactionId;
	
	/** 
	 * wifi的物理地址
	 **/
	private $wifimac;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setBankCard($bankCard)
	{
		$this->bankCard = $bankCard;
		$this->apiParas["bank_card"] = $bankCard;
	}

	public function getBankCard()
	{
		return $this->bankCard;
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

	public function setCertType($certType)
	{
		$this->certType = $certType;
		$this->apiParas["cert_type"] = $certType;
	}

	public function getCertType()
	{
		return $this->certType;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		$this->apiParas["email"] = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setImei($imei)
	{
		$this->imei = $imei;
		$this->apiParas["imei"] = $imei;
	}

	public function getImei()
	{
		return $this->imei;
	}

	public function setImsi($imsi)
	{
		$this->imsi = $imsi;
		$this->apiParas["imsi"] = $imsi;
	}

	public function getImsi()
	{
		return $this->imsi;
	}

	public function setIp($ip)
	{
		$this->ip = $ip;
		$this->apiParas["ip"] = $ip;
	}

	public function getIp()
	{
		return $this->ip;
	}

	public function setMac($mac)
	{
		$this->mac = $mac;
		$this->apiParas["mac"] = $mac;
	}

	public function getMac()
	{
		return $this->mac;
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

	public function setWifimac($wifimac)
	{
		$this->wifimac = $wifimac;
		$this->apiParas["wifimac"] = $wifimac;
	}

	public function getWifimac()
	{
		return $this->wifimac;
	}

	public function getApiMethodName()
	{
		return "zhima.credit.ivs.detail.get";
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
