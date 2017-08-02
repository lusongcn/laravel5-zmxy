<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.credit.contact.get request
 *
 * @author auto create
 * @since 1.0, 2017-01-18 21:30:13
 */
class ZhimaCreditContactGetRequest
{
	/** 
	 * 用户的地址：最多传入三组，用|分隔。地址中不能有如下特殊字符&,^,\
	 **/
	private $address;
	
	/** 
	 * 是否逾期。T表示逾期，F表示非逾期
	 **/
	private $isOverdue;
	
	/** 
	 * 用户手机号，最多传入三个，每个手机号之间以“|"分隔。
	 **/
	private $mobile;
	
	/** 
	 * 芝麻会员在商户端的身份标识。
	 **/
	private $openId;
	
	/** 
	 * 逾期天数。请输入数字。
	 **/
	private $overdueDays;
	
	/** 
	 * 产品码
	 **/
	private $productCode;
	
	/** 
	 * 商户传入的业务流水号。此字段由商户生成，需确保唯一性，用于定位每一次请求，后续按此流水进行对帐。生成规则: 固定30位数字串，前17位为精确到毫秒的时间yyyyMMddhhmmssSSS，后13位为自增数字。
	 **/
	private $transactionId;

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

	public function setIsOverdue($isOverdue)
	{
		$this->isOverdue = $isOverdue;
		$this->apiParas["is_overdue"] = $isOverdue;
	}

	public function getIsOverdue()
	{
		return $this->isOverdue;
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

	public function setOpenId($openId)
	{
		$this->openId = $openId;
		$this->apiParas["open_id"] = $openId;
	}

	public function getOpenId()
	{
		return $this->openId;
	}

	public function setOverdueDays($overdueDays)
	{
		$this->overdueDays = $overdueDays;
		$this->apiParas["overdue_days"] = $overdueDays;
	}

	public function getOverdueDays()
	{
		return $this->overdueDays;
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
		return "zhima.credit.contact.get";
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
