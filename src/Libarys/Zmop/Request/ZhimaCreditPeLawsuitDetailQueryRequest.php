<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.credit.pe.lawsuit.detail.query request
 *
 * @author auto create
 * @since 1.0, 2017-07-06 15:22:58
 */
class ZhimaCreditPeLawsuitDetailQueryRequest
{
	/** 
	 * 涉诉类型明细ID，对应字段值：裁判文书（partyId)，执行公告(zxggId)，失信记录(shixinId)，曝光台(bgtId)
	 **/
	private $lawsuitId;
	
	/** 
	 * 涉诉类型包括：裁判文书（party)，执行公告(zxgg)，失信记录(sxgg)，曝光台(bgt)
	 **/
	private $lawsuitType;
	
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

	
	public function setLawsuitId($lawsuitId)
	{
		$this->lawsuitId = $lawsuitId;
		$this->apiParas["lawsuit_id"] = $lawsuitId;
	}

	public function getLawsuitId()
	{
		return $this->lawsuitId;
	}

	public function setLawsuitType($lawsuitType)
	{
		$this->lawsuitType = $lawsuitType;
		$this->apiParas["lawsuit_type"] = $lawsuitType;
	}

	public function getLawsuitType()
	{
		return $this->lawsuitType;
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
		return "zhima.credit.pe.lawsuit.detail.query";
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
