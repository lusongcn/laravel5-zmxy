<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.auth.engine.smsauth request
 *
 * @author auto create
 * @since 1.0, 2017-04-07 10:47:27
 */
class ZhimaAuthEngineSmsauthRequest
{
	/** 
	 * 业务扩展字段,页面授权接口需要传入auth_code,channelType,state
auth_code授权码,短信唤起支付宝客户端接口的值为M_SMS
channelType渠道类型,每个授权码支持不同的渠道类型
appsdk:sdk接入
apppc:商户pc页面接入
api:后台api接入
windows:支付宝服务窗接入
app:商户app接入
state是商户自定义的数据,页面授权接口会原样把这个数据返回个商户
	 **/
	private $bizParams;
	
	/** 
	 * 身份参数,短信唤起支付宝客户端授权需要传入姓名+证件类型+证件号码+手机号
	 **/
	private $identityParam;
	
	/** 
	 * 身份类型,短信唤起支付宝客户端接口的身份识别类型为2:按照姓名+证件类型+证件号码+手机号进行授权
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
		return "zhima.auth.engine.smsauth";
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
