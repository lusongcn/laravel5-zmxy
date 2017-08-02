<?php
/**
 * ZHIMA API: zhima.credit.driver.verify request
 *
 * @author auto create
 * @since 1.0, 2016-08-06 15:11:41
 */
class ZhimaCreditDriverVerifyRequest
{
	/** 
	 * 驾驶证档案编号
	 **/
	private $archiveNo;
	
	/** 
	 * 初次领证日期，格式为yyyyMMdd
	 **/
	private $issueDate;
	
	/** 
	 * 驾驶证号码
	 **/
	private $licenseNo;
	
	/** 
	 * 驾驶证上的姓名
	 **/
	private $name;
	
	/** 
	 * 产品码
	 **/
	private $productCode;
	
	/** 
	 * 芝麻业务凭证，详见https://b.zmxy.com.cn/technology/openDoc.htm?id=334
	 **/
	private $transactionId;
	
	/** 
	 * 准驾车型，多个车型之间以 || 隔开，如C1 || C2 || B2
	 **/
	private $vehicleClass;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setArchiveNo($archiveNo)
	{
		$this->archiveNo = $archiveNo;
		$this->apiParas["archive_no"] = $archiveNo;
	}

	public function getArchiveNo()
	{
		return $this->archiveNo;
	}

	public function setIssueDate($issueDate)
	{
		$this->issueDate = $issueDate;
		$this->apiParas["issue_date"] = $issueDate;
	}

	public function getIssueDate()
	{
		return $this->issueDate;
	}

	public function setLicenseNo($licenseNo)
	{
		$this->licenseNo = $licenseNo;
		$this->apiParas["license_no"] = $licenseNo;
	}

	public function getLicenseNo()
	{
		return $this->licenseNo;
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

	public function setVehicleClass($vehicleClass)
	{
		$this->vehicleClass = $vehicleClass;
		$this->apiParas["vehicle_class"] = $vehicleClass;
	}

	public function getVehicleClass()
	{
		return $this->vehicleClass;
	}

	public function getApiMethodName()
	{
		return "zhima.credit.driver.verify";
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
