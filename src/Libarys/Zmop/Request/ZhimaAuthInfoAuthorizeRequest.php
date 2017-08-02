<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.auth.info.authorize request
 *
 * @author auto create
 * @since 1.0, 2017-04-07 10:46:17
 */
class ZhimaAuthInfoAuthorizeRequest
{
	/** 
	 * 业务扩展字段,页面授权接口需要传入auth_code,channelType,state
auth_code授权码,值取决于授权方式和身份类型
PC方式,身份类型identity_type=1:
{"auth_code":"M_MOBILE_APPPC"}
PC方式,身份类型identity_type=2:
{"auth_code":"M_APPPC_CERT"}
H5方式(身份类型identity_type为任何值):
{"auth_code":"M_H5"}
SDK方式(身份类型identity_type为任何值):
{"auth_code":"M_APPSDK"}
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
	 * 不同身份类型传入的参数列表,json字符串的key-value格式

身份类型identityType=1:
{"mobileNo":"15158657683"}

身份类型identityType=2:
{"certNo":"330100xxxxxxxxxxxx","name":"张三","certType":"IDENTITY_CARD"}
	 **/
	private $identityParam;
	
	/** 
	 * 身份标识类型
<p>1:按照手机号进行授权</p>
2:按照身份证+姓名进行授权
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
		return "zhima.auth.info.authorize";
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
