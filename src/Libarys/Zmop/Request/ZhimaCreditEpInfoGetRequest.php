<?php
/**
 * ZHIMA API: zhima.credit.ep.info.get request
 *
 * @author auto create
 * @since 1.0, 2016-05-06 11:44:47
 */
class ZhimaCreditEpInfoGetRequest
{
	/** 
	 * 查询类型。1-社会信用代码；2-企业名称；3-企业注册号；4-组织机构代码。
	 **/
	private $dataType;
	
	/** 
	 * 数据类型的对应值。
	 **/
	private $dataValue;
	
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

	
	public function setDataType($dataType)
	{
		$this->dataType = $dataType;
		$this->apiParas["data_type"] = $dataType;
	}

	public function getDataType()
	{
		return $this->dataType;
	}

	public function setDataValue($dataValue)
	{
		$this->dataValue = $dataValue;
		$this->apiParas["data_value"] = $dataValue;
	}

	public function getDataValue()
	{
		return $this->dataValue;
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
		return "zhima.credit.ep.info.get";
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
