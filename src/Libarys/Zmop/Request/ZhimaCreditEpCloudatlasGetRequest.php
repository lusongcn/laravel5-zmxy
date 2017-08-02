<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.credit.ep.cloudatlas.get request
 *
 * @author auto create
 * @since 1.0, 2017-06-21 09:19:45
 */
class ZhimaCreditEpCloudatlasGetRequest
{
	/** 
	 * 请输入调用云图产品申请接口返回的云图编码
	 **/
	private $cloudatlasCode;
	
	/** 
	 * 产品码
	 **/
	private $productCode;
	
	/** 
	 * 此transaction_id请传云图查询请求接口的transaction_id
	 **/
	private $transactionId;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setCloudatlasCode($cloudatlasCode)
	{
		$this->cloudatlasCode = $cloudatlasCode;
		$this->apiParas["cloudatlas_code"] = $cloudatlasCode;
	}

	public function getCloudatlasCode()
	{
		return $this->cloudatlasCode;
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
		return "zhima.credit.ep.cloudatlas.get";
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
