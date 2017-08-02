<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.credit.watchlist.brief.get request
 *
 * @author auto create
 * @since 1.0, 2017-03-31 16:37:50
 */
class ZhimaCreditWatchlistBriefGetRequest
{
	/** 
	 * 证件类型对应的证件号码， 如：身份证号， 护照号，userId
	 **/
	private $certNo;
	
	/** 
	 * 当前支持3种类型的输入：
IDENTITY_CARD (身份证)
PASSPORT (护照)
ALIPAY_USER_ID (支付宝uid)
	 **/
	private $certType;
	
	/** 
	 * 当cert_type 为ALIPAY_USER_ID时证件名称可为空
	 **/
	private $name;
	
	/** 
	 * 芝麻开放平台信用产品码， 唯一标示云产品
	 **/
	private $productCode;
	
	/** 
	 * 商户请求的唯一标志，长度64位以内字符串，仅限字母数字下划线组合。
该标识作为业务调用的唯一标识，商户要保证其业务唯一性，使用相同transaction_id的查询，
芝麻在一段时间内（一般为1天）返回首次查询结果，
超过有效期的查询即为无效并返回异常，有效期内的重复查询不重新计费。
	 **/
	private $transactionId;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
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

	public function getApiMethodName()
	{
		return "zhima.credit.watchlist.brief.get";
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
