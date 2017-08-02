<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.merchant.scene.creditpay.bizriskeval.query request
 *
 * @author auto create
 * @since 1.0, 2017-07-20 22:17:50
 */
class ZhimaMerchantSceneCreditpayBizriskevalQueryRequest
{
	/** 
	 * 二级商户应用id
	 **/
	private $linkedAppId;
	
	/** 
	 * 二级商户merchantId
	 **/
	private $linkedMerchantId;
	
	/** 
	 * openId
	 **/
	private $openId;
	
	/** 
	 * 规则id
	 **/
	private $ruleId;
	
	/** 
	 * 风险评估场景码
	 **/
	private $scenceCode;
	
	/** 
	 * 支付宝uid
	 **/
	private $userId;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setLinkedAppId($linkedAppId)
	{
		$this->linkedAppId = $linkedAppId;
		$this->apiParas["linked_app_id"] = $linkedAppId;
	}

	public function getLinkedAppId()
	{
		return $this->linkedAppId;
	}

	public function setLinkedMerchantId($linkedMerchantId)
	{
		$this->linkedMerchantId = $linkedMerchantId;
		$this->apiParas["linked_merchant_id"] = $linkedMerchantId;
	}

	public function getLinkedMerchantId()
	{
		return $this->linkedMerchantId;
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

	public function setRuleId($ruleId)
	{
		$this->ruleId = $ruleId;
		$this->apiParas["rule_id"] = $ruleId;
	}

	public function getRuleId()
	{
		return $this->ruleId;
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

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "zhima.merchant.scene.creditpay.bizriskeval.query";
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
