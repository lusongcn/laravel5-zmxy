<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.credit.risk.evaluate.rule.query request
 *
 * @author auto create
 * @since 1.0, 2017-06-29 14:03:10
 */
class ZhimaCreditRiskEvaluateRuleQueryRequest
{
	/** 
	 * 签约产品标示，唯一对应一个产品
	 **/
	private $productCode;
	
	/** 
	 * 可选参数，传值则标示只查询对应规则配置值，不传则输出所有规则配置值
	 **/
	private $ruleCode;
	
	/** 
	 * 1000806 【规则标识，使用APPID】
如果是ISV商户： 传入二级商户APPID
如果是普通商户：传入自己调用APPID
	 **/
	private $ruleId;
	
	/** 
	 * 标识对接业务场景，业务场景下商户可做自定义策略配置
	 **/
	private $sceneCode;
	
	/** 
	 * 唯一标示商户每一笔请求
	 **/
	private $transactionId;

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

	public function setRuleCode($ruleCode)
	{
		$this->ruleCode = $ruleCode;
		$this->apiParas["rule_code"] = $ruleCode;
	}

	public function getRuleCode()
	{
		return $this->ruleCode;
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

	public function setSceneCode($sceneCode)
	{
		$this->sceneCode = $sceneCode;
		$this->apiParas["scene_code"] = $sceneCode;
	}

	public function getSceneCode()
	{
		return $this->sceneCode;
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
		return "zhima.credit.risk.evaluate.rule.query";
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
