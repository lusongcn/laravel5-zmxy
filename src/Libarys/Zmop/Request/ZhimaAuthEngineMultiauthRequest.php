<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.auth.engine.multiauth request
 *
 * @author auto create
 * @since 1.0, 2017-07-26 21:17:44
 */
class ZhimaAuthEngineMultiauthRequest
{
	/** 
	 * 外部商户应用id
	 **/
	private $authAppId;
	
	/** 
	 * 外部商户id
	 **/
	private $authMerchantId;
	
	/** 
	 * 支付宝用户id
	 **/
	private $userId;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setAuthAppId($authAppId)
	{
		$this->authAppId = $authAppId;
		$this->apiParas["auth_app_id"] = $authAppId;
	}

	public function getAuthAppId()
	{
		return $this->authAppId;
	}

	public function setAuthMerchantId($authMerchantId)
	{
		$this->authMerchantId = $authMerchantId;
		$this->apiParas["auth_merchant_id"] = $authMerchantId;
	}

	public function getAuthMerchantId()
	{
		return $this->authMerchantId;
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
		return "zhima.auth.engine.multiauth";
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
