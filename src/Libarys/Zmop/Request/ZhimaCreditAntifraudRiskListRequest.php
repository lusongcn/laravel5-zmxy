<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.credit.antifraud.risk.list request
 *
 * @author auto create
 * @since 1.0, 2017-03-17 20:46:34
 */
class ZhimaCreditAntifraudRiskListRequest
{
	/** 
	 * 地址信息。省+市+区/县+详细地址，其中 省+市+区/县可以为空，长度不超过256，不要包含特殊字符，如","，"\"，"|"，"&"，"^"
	 **/
	private $address;
	
	/** 
	 * 银行卡号。中国大陆银行发布的银行卡:借记卡长度19位；信用卡长度16位；各位的取值位[0,9]的整数；不含虚拟卡
	 **/
	private $bankCard;
	
	/** 
	 * 证件号。证件类型、证件号、姓名三要素均为必填参数
	 **/
	private $certNo;
	
	/** 
	 * 证件类型。IDENTITY_CARD标识为身份证，目前仅支持身份证类型
	 **/
	private $certType;
	
	/** 
	 * 电子邮箱。合法email，字母小写，特殊符号以半角形式出现
	 **/
	private $email;
	
	/** 
	 * 国际移动设备标志。15位长度数字
	 **/
	private $imei;
	
	/** 
	 * ip地址。以"."分割的四段Ip，如 x.x.x.x，x为[0,255]之间的整数
	 **/
	private $ip;
	
	/** 
	 * 物理地址。支持格式如下：xx:xx:xx:xx:xx:xx，xx-xx-xx-xx-xx-xx，xxxxxxxxxxxx，x取值范围[0,9]之间的整数及A，B，C，D，E，F
	 **/
	private $mac;
	
	/** 
	 * 手机号码。中国大陆合法手机号，长度11位，不含国家代码
	 **/
	private $mobile;
	
	/** 
	 * 姓名。长度不超过64，姓名中不要包含特殊字符，如","，"\"，"|"，"&"，"^"
	 **/
	private $name;
	
	/** 
	 * 产品码。标记商户接入的具体产品；直接使用每个接口入参中示例值即可
	 **/
	private $productCode;
	
	/** 
	 * 商户请求的唯一标志，长度64位以内字符串，仅限字母数字下划线组合。该标识作为业务调用的唯一标识，商户要保证其业务唯一性，使用相同transaction_id的查询，芝麻在一段时间内（一般为1天）返回首次查询结果，超过有效期的查询即为无效并返回异常，有效期内的重复查询不重新计费
	 **/
	private $transactionId;
	
	/** 
	 * wifi的物理地址。支持格式如下：xx:xx:xx:xx:xx:xx，xx-xx-xx-xx-xx-xx，xxxxxxxxxxxx，x取值范围[0,9]之间的整数及A，B，C，D，E，F
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
		return "zhima.credit.antifraud.risk.list";
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
