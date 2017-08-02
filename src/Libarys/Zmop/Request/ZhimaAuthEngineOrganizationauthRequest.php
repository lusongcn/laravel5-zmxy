<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.auth.engine.organizationauth request
 *
 * @author auto create
 * @since 1.0, 2017-07-05 10:31:00
 */
class ZhimaAuthEngineOrganizationauthRequest
{
	/** 
	 * 授权码入参，

1). 若identity_Type=2时，

{"auth_code":"M_P_COMPANY_CERT"}

 

2). 若identity_Type=5时，

{"auth_code":"M_P_COMPANY_UID"}
	 **/
	private $bizParams;
	
	/** 
	 * 证件号目前支持2种：
a. 工商注册号：NATIONAL_LEGAL  
b. 社会统一信用代码 : NATIONAL_LEGAL_MERGE

1). 若identity_type=2时：
identity_param={\"certNo\":\"440000400004160\",\"certType\":\"NATIONAL_LEGAL\",\"name\":\"中国移动通信集团广东有限公司\"}"

2). 若identity_type=5时：
identity_param={\"userId\":\"2088xxxxxx\"}"
	 **/
	private $identityParam;
	
	/** 
	 * 用户身份标识类型：
5： userId入参的类型标识；
2： 证件号和姓名的入参的类型标识
	 **/
	private $identityType;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setBizParams($bizParams)
	{
		$this->bizParams = $bizParams;
		$this->apiParas["biz_params"] = $bizParams;
	}

	public function getBizParams()
	{
		return $this->bizParams;
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
		return "zhima.auth.engine.organizationauth";
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
