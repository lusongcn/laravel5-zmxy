<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.credit.contact.analyze.query request
 *
 * @author auto create
 * @since 1.0, 2017-04-25 15:59:23
 */
class ZhimaCreditContactAnalyzeQueryRequest
{
	/** 
	 * 芝麻开放平台信用产品码， 唯一标示云产品
	 **/
	private $productCode;
	
	/** 
	 * 商户请求的唯一标志，长度64位以内字符串，仅限字母数字下划线组合。 该标识作为业务调用的唯一标识，商户要保证其业务唯一性，使用相同transaction_id的查询， 芝麻在一段时间内（一般为1天）返回首次查询结果， 超过有效期的查询即为无效并返回异常，有效期内的重复查询不重新计费。
	 **/
	private $transactionId;
	
	/** 
	 * 支付宝用户id的列表，String类型，多个uid之间用逗号【,】分隔
	 **/
	private $userIds;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
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

	public function setUserIds($userIds)
	{
		$this->userIds = $userIds;
		$this->apiParas["user_ids"] = $userIds;
	}

	public function getUserIds()
	{
		return $this->userIds;
	}

	public function getApiMethodName()
	{
		return "zhima.credit.contact.analyze.query";
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
