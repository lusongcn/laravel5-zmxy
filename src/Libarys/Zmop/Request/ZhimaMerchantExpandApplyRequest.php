<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.merchant.expand.apply request
 *
 * @author auto create
 * @since 1.0, 2017-05-16 11:44:21
 */
class ZhimaMerchantExpandApplyRequest
{
	/** 
	 * 浙江飞猪网络技术有限公司，企业别称请填写【飞猪】
	 **/
	private $aliasName;
	
	/** 
	 * 为用户提供服务的支付宝服务窗名称，如有请填写
支付宝服务窗，微信公众号，网站地址，应用名称必须是4选1
	 **/
	private $alipayWindowName;
	
	/** 
	 * 为用户提供服务的手机应用，如有请填写
支付宝服务窗，微信公众号，网站地址，应用名称必须是4选1
	 **/
	private $appName;
	
	/** 
	 * 用于记录本次提交信息中，那些字段有所调整
	 **/
	private $applyMemo;
	
	/** 
	 * 签约芝麻信用产品的用途，最多5个场景，ISV可以自定义
	 **/
	private $bizScene;
	
	/** 
	 * 数据反馈联系人邮箱地址(使用芝麻信用评分、行业关注名单时，联动解决数据问题的接口人。)
	 **/
	private $dataFeedbackContractEmail;
	
	/** 
	 * 数据反馈联系人手机号码(使用芝麻信用评分、行业关注名单时，联动解决数据问题的接口人。)
	 **/
	private $dataFeedbackContractMobile;
	
	/** 
	 * 数据反馈联系人姓名(使用芝麻信用评分、行业关注名单时，联动解决数据问题的接口人。)
	 **/
	private $dataFeedbackContractName;
	
	/** 
	 * 商户logo的图片内容，把图片的二进制转化成String传递过来
，最大2M
	 **/
	private $logoImage;
	
	/** 
	 * 商户图标类型，只支持如下格式：bmp, jpg, jpeg, png, gif
	 **/
	private $logoImageType;
	
	/** 
	 * 主要联系人邮箱地址(联系人将用于接收重要通知，如签约进度、技术集成、合同到期等)
	 **/
	private $majorContractEmail;
	
	/** 
	 * 主要联系人手机号码(联系人将用于接收重要通知，如签约进度、技术集成、合同到期等)
	 **/
	private $majorContractMobile;
	
	/** 
	 * 主要联系人姓名(联系人将用于接收重要通知，如签约进度、技术集成、合同到期等)
	 **/
	private $majorContractName;
	
	/** 
	 * 异议处理联系人邮箱地址(用户对所披露的负面信息存在异议时，联动核查的接口人)
	 **/
	private $objectionContractEmail;
	
	/** 
	 * 异议处理联系人手机号码(用户对所披露的负面信息存在异议时，联动核查的接口人)
	 **/
	private $objectionContractMobile;
	
	/** 
	 * 异议处理联系人姓名(用户对所披露的负面信息存在异议时，联动核查的接口人)
	 **/
	private $objectionContractName;
	
	/** 
	 * 芝麻特定的商户一级行业归属，比如生活行业，金融行业，政府行业
	 **/
	private $oneLevelMcc;
	
	/** 
	 * 商户业务许可证图片内容，把图片的二进制转化成String传递过来
，最大2M
	 **/
	private $qualificationImage;
	
	/** 
	 * 商户业务许可证图片类型，只支持如下格式：bmp, jpg, jpeg, png, gif
	 **/
	private $qualificationImageType;
	
	/** 
	 * 服务联动联系人邮箱地址(联动解决用户服务相关问题的接口人。比如用户投诉或出现重大服务事件时，可以协调解决问题的联系人)
	 **/
	private $serviceContractEmail;
	
	/** 
	 * 服务联动联系人手机号码(联动解决用户服务相关问题的接口人。比如用户投诉或出现重大服务事件时，可以协调解决问题的联系人)
	 **/
	private $serviceContractMobile;
	
	/** 
	 * 服务联动联系人姓名(联动解决用户服务相关问题的接口人。比如用户投诉或出现重大服务事件时，可以协调解决问题的联系人)
	 **/
	private $serviceContractName;
	
	/** 
	 * 芝麻特有的商户二级行业归属，比如汽车服务
	 **/
	private $twoLevelMcc;
	
	/** 
	 * 用户提供服务的微信公众号，如有请填写
支付宝服务窗，微信公众号，网站地址，应用名称必须是4选1
	 **/
	private $webchatAmount;
	
	/** 
	 * 为用户提供服务的网站，如有请填写
支付宝服务窗，微信公众号，网站地址，应用名称必须是4选1
	 **/
	private $websitUrl;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setAliasName($aliasName)
	{
		$this->aliasName = $aliasName;
		$this->apiParas["alias_name"] = $aliasName;
	}

	public function getAliasName()
	{
		return $this->aliasName;
	}

	public function setAlipayWindowName($alipayWindowName)
	{
		$this->alipayWindowName = $alipayWindowName;
		$this->apiParas["alipay_window_name"] = $alipayWindowName;
	}

	public function getAlipayWindowName()
	{
		return $this->alipayWindowName;
	}

	public function setAppName($appName)
	{
		$this->appName = $appName;
		$this->apiParas["app_name"] = $appName;
	}

	public function getAppName()
	{
		return $this->appName;
	}

	public function setApplyMemo($applyMemo)
	{
		$this->applyMemo = $applyMemo;
		$this->apiParas["apply_memo"] = $applyMemo;
	}

	public function getApplyMemo()
	{
		return $this->applyMemo;
	}

	public function setBizScene($bizScene)
	{
		$this->bizScene = $bizScene;
		$this->apiParas["biz_scene"] = $bizScene;
	}

	public function getBizScene()
	{
		return $this->bizScene;
	}

	public function setDataFeedbackContractEmail($dataFeedbackContractEmail)
	{
		$this->dataFeedbackContractEmail = $dataFeedbackContractEmail;
		$this->apiParas["data_feedback_contract_email"] = $dataFeedbackContractEmail;
	}

	public function getDataFeedbackContractEmail()
	{
		return $this->dataFeedbackContractEmail;
	}

	public function setDataFeedbackContractMobile($dataFeedbackContractMobile)
	{
		$this->dataFeedbackContractMobile = $dataFeedbackContractMobile;
		$this->apiParas["data_feedback_contract_mobile"] = $dataFeedbackContractMobile;
	}

	public function getDataFeedbackContractMobile()
	{
		return $this->dataFeedbackContractMobile;
	}

	public function setDataFeedbackContractName($dataFeedbackContractName)
	{
		$this->dataFeedbackContractName = $dataFeedbackContractName;
		$this->apiParas["data_feedback_contract_name"] = $dataFeedbackContractName;
	}

	public function getDataFeedbackContractName()
	{
		return $this->dataFeedbackContractName;
	}

	public function setLogoImage($logoImage)
	{
		$this->logoImage = $logoImage;
		$this->apiParas["logo_image"] = $logoImage;
	}

	public function getLogoImage()
	{
		return $this->logoImage;
	}

	public function setLogoImageType($logoImageType)
	{
		$this->logoImageType = $logoImageType;
		$this->apiParas["logo_image_type"] = $logoImageType;
	}

	public function getLogoImageType()
	{
		return $this->logoImageType;
	}

	public function setMajorContractEmail($majorContractEmail)
	{
		$this->majorContractEmail = $majorContractEmail;
		$this->apiParas["major_contract_email"] = $majorContractEmail;
	}

	public function getMajorContractEmail()
	{
		return $this->majorContractEmail;
	}

	public function setMajorContractMobile($majorContractMobile)
	{
		$this->majorContractMobile = $majorContractMobile;
		$this->apiParas["major_contract_mobile"] = $majorContractMobile;
	}

	public function getMajorContractMobile()
	{
		return $this->majorContractMobile;
	}

	public function setMajorContractName($majorContractName)
	{
		$this->majorContractName = $majorContractName;
		$this->apiParas["major_contract_name"] = $majorContractName;
	}

	public function getMajorContractName()
	{
		return $this->majorContractName;
	}

	public function setObjectionContractEmail($objectionContractEmail)
	{
		$this->objectionContractEmail = $objectionContractEmail;
		$this->apiParas["objection_contract_email"] = $objectionContractEmail;
	}

	public function getObjectionContractEmail()
	{
		return $this->objectionContractEmail;
	}

	public function setObjectionContractMobile($objectionContractMobile)
	{
		$this->objectionContractMobile = $objectionContractMobile;
		$this->apiParas["objection_contract_mobile"] = $objectionContractMobile;
	}

	public function getObjectionContractMobile()
	{
		return $this->objectionContractMobile;
	}

	public function setObjectionContractName($objectionContractName)
	{
		$this->objectionContractName = $objectionContractName;
		$this->apiParas["objection_contract_name"] = $objectionContractName;
	}

	public function getObjectionContractName()
	{
		return $this->objectionContractName;
	}

	public function setOneLevelMcc($oneLevelMcc)
	{
		$this->oneLevelMcc = $oneLevelMcc;
		$this->apiParas["one_level_mcc"] = $oneLevelMcc;
	}

	public function getOneLevelMcc()
	{
		return $this->oneLevelMcc;
	}

	public function setQualificationImage($qualificationImage)
	{
		$this->qualificationImage = $qualificationImage;
		$this->apiParas["qualification_image"] = $qualificationImage;
	}

	public function getQualificationImage()
	{
		return $this->qualificationImage;
	}

	public function setQualificationImageType($qualificationImageType)
	{
		$this->qualificationImageType = $qualificationImageType;
		$this->apiParas["qualification_image_type"] = $qualificationImageType;
	}

	public function getQualificationImageType()
	{
		return $this->qualificationImageType;
	}

	public function setServiceContractEmail($serviceContractEmail)
	{
		$this->serviceContractEmail = $serviceContractEmail;
		$this->apiParas["service_contract_email"] = $serviceContractEmail;
	}

	public function getServiceContractEmail()
	{
		return $this->serviceContractEmail;
	}

	public function setServiceContractMobile($serviceContractMobile)
	{
		$this->serviceContractMobile = $serviceContractMobile;
		$this->apiParas["service_contract_mobile"] = $serviceContractMobile;
	}

	public function getServiceContractMobile()
	{
		return $this->serviceContractMobile;
	}

	public function setServiceContractName($serviceContractName)
	{
		$this->serviceContractName = $serviceContractName;
		$this->apiParas["service_contract_name"] = $serviceContractName;
	}

	public function getServiceContractName()
	{
		return $this->serviceContractName;
	}

	public function setTwoLevelMcc($twoLevelMcc)
	{
		$this->twoLevelMcc = $twoLevelMcc;
		$this->apiParas["two_level_mcc"] = $twoLevelMcc;
	}

	public function getTwoLevelMcc()
	{
		return $this->twoLevelMcc;
	}

	public function setWebchatAmount($webchatAmount)
	{
		$this->webchatAmount = $webchatAmount;
		$this->apiParas["webchat_amount"] = $webchatAmount;
	}

	public function getWebchatAmount()
	{
		return $this->webchatAmount;
	}

	public function setWebsitUrl($websitUrl)
	{
		$this->websitUrl = $websitUrl;
		$this->apiParas["websit_url"] = $websitUrl;
	}

	public function getWebsitUrl()
	{
		return $this->websitUrl;
	}

	public function getApiMethodName()
	{
		return "zhima.merchant.expand.apply";
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
