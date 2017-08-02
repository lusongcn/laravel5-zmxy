<?php
/**
 * ZHIMA API: zhima.credit.vehicle.verify request
 *
 * @author auto create
 * @since 1.0, 2016-08-06 15:11:27
 */
class ZhimaCreditVehicleVerifyRequest
{
	/** 
	 * 发动机号码。vin与engine_no至少包含一项
	 **/
	private $engineNo;
	
	/** 
	 * 所有人，支持个人和机构
	 **/
	private $owner;
	
	/** 
	 * 车牌号
	 **/
	private $plateNo;
	
	/** 
	 * 产品码
	 **/
	private $productCode;
	
	/** 
	 * 注册日期，格式yyyyMMdd
	 **/
	private $registerDate;
	
	/** 
	 * 商户传入的业务流水号。此字段由商户生成，需确保唯一性，用于定位每一次请求，后续按此流水进行对帐。生成规则: 固定30位数字串，前17位为精确到毫秒的时间yyyyMMddHHmmssSSS，后13位为自增数字。
	 **/
	private $transactionId;
	
	/** 
	 * 车辆品牌（行驶证中中文部分）
	 **/
	private $vehicleBrand;
	
	/** 
	 * 车辆型号（行驶证中英文部分）
	 **/
	private $vehicleSeries;
	
	/** 
	 * 车辆识别代号。vin与engine_no至少包含一项
	 **/
	private $vin;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setEngineNo($engineNo)
	{
		$this->engineNo = $engineNo;
		$this->apiParas["engine_no"] = $engineNo;
	}

	public function getEngineNo()
	{
		return $this->engineNo;
	}

	public function setOwner($owner)
	{
		$this->owner = $owner;
		$this->apiParas["owner"] = $owner;
	}

	public function getOwner()
	{
		return $this->owner;
	}

	public function setPlateNo($plateNo)
	{
		$this->plateNo = $plateNo;
		$this->apiParas["plate_no"] = $plateNo;
	}

	public function getPlateNo()
	{
		return $this->plateNo;
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

	public function setRegisterDate($registerDate)
	{
		$this->registerDate = $registerDate;
		$this->apiParas["register_date"] = $registerDate;
	}

	public function getRegisterDate()
	{
		return $this->registerDate;
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

	public function setVehicleBrand($vehicleBrand)
	{
		$this->vehicleBrand = $vehicleBrand;
		$this->apiParas["vehicle_brand"] = $vehicleBrand;
	}

	public function getVehicleBrand()
	{
		return $this->vehicleBrand;
	}

	public function setVehicleSeries($vehicleSeries)
	{
		$this->vehicleSeries = $vehicleSeries;
		$this->apiParas["vehicle_series"] = $vehicleSeries;
	}

	public function getVehicleSeries()
	{
		return $this->vehicleSeries;
	}

	public function setVin($vin)
	{
		$this->vin = $vin;
		$this->apiParas["vin"] = $vin;
	}

	public function getVin()
	{
		return $this->vin;
	}

	public function getApiMethodName()
	{
		return "zhima.credit.vehicle.verify";
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
