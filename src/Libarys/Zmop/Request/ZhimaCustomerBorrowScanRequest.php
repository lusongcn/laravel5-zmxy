<?php
/**
 * ZHIMA API: zhima.customer.borrow.scan request
 *
 * @author auto create
 * @since 1.0, 2016-07-18 16:38:23
 */
class ZhimaCustomerBorrowScanRequest
{
	/** 
	 * 
	 **/
	private $goodsId;
	
	/** 
	 * 
	 **/
	private $productCode;
	
	/** 
	 * 
	 **/
	private $scenceCode;
	
	/** 
	 * 
	 **/
	private $shopCode;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setGoodsId($goodsId)
	{
		$this->goodsId = $goodsId;
		$this->apiParas["goods_id"] = $goodsId;
	}

	public function getGoodsId()
	{
		return $this->goodsId;
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

	public function setScenceCode($scenceCode)
	{
		$this->scenceCode = $scenceCode;
		$this->apiParas["scence_code"] = $scenceCode;
	}

	public function getScenceCode()
	{
		return $this->scenceCode;
	}

	public function setShopCode($shopCode)
	{
		$this->shopCode = $shopCode;
		$this->apiParas["shop_code"] = $shopCode;
	}

	public function getShopCode()
	{
		return $this->shopCode;
	}

	public function getApiMethodName()
	{
		return "zhima.customer.borrow.scan";
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
