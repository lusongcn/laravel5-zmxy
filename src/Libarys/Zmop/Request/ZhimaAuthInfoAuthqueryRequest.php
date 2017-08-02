<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.auth.info.authquery request
 *
 * @author auto create
 * @since 1.0, 2017-04-07 10:48:13
 */
class ZhimaAuthInfoAuthqueryRequest
{
	/** 
	 * 授权类型，用于识别当前查询是否授权的分流；
可传参数“B2B”或“C2B”，自助商户请填写“C2B”。
	 **/
	private $authCategory;
	
	/** 
	 * 不同身份类型传入的参数列表,json字符串的key-value格式
身份类型identityType=0:
{"openId":"268801234567890123456"}
身份类型identityType=2:
{"certNo":"330100xxxxxxxxxxxx","name":"张三","certType":"IDENTITY_CARD"}
	 **/
	private $identityParam;
	
	/** 
	 * 身份标识类型
0:按照openId查询
2:按照身份证+姓名查询
	 **/
	private $identityType;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setAuthCategory($authCategory)
	{
		$this->authCategory = $authCategory;
		$this->apiParas["auth_category"] = $authCategory;
	}

	public function getAuthCategory()
	{
		return $this->authCategory;
	}

	public function setIdentityParam($identityParam)
	{
		$this->identityParam = $identityParam;
		$this->apiParas["identity_param"] = $identityParam;
	}

	public function getIdentityParam()
	{
		return $this->identityParam;
	}

	public function setIdentityType($identityType)
	{
		$this->identityType = $identityType;
		$this->apiParas["identity_type"] = $identityType;
	}

	public function getIdentityType()
	{
		return $this->identityType;
	}

	public function getApiMethodName()
	{
		return "zhima.auth.info.authquery";
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
