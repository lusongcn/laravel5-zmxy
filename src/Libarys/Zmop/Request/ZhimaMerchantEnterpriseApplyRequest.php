<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.merchant.enterprise.apply request
 *
 * @author auto create
 * @since 1.0, 2017-05-27 10:05:51
 */
class ZhimaMerchantEnterpriseApplyRequest
{
	/** 
	 * 商户别名
	 **/
	private $aliasName;
	
	/** 
	 * 为用户提供服务的支付宝服务窗名称，如有请填写 支付宝服务窗，微信公众号，网站地址，应用名称必须是4选1
	 **/
	private $alipayWindowName;
	
	/** 
	 * 为用户提供服务的手机应用，如有请填写 支付宝服务窗，微信公众号，网站地址，应用名称必须是4选1
	 **/
	private $appName;
	
	/** 
	 * 用于记录本次提交信息中，那些字段有所调整
	 **/
	private $applyMemo;
	
	/** 
	 * 业务授权书url，请通过zhima.merchant.image.upload上传文件；在商户类型为政府机构或者事业单位时，与证照图片二选一；在商户类型为企业时，与法人信息二选一
	 **/
	private $authLetterUrl;
	
	/** 
	 * 签约芝麻信用产品的用途，最多5个场景，ISV可以自定义
	 **/
	private $bizScene;
	
	/** 
	 * 企业地址
	 **/
	private $companyAddress;
	
	/** 
	 * 企业名称
	 **/
	private $companyName;
	
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
	 * 证照结束日期
9999-12-31   代表长期
	 **/
	private $endBusinessDate;
	
	/** 
	 * 法人身份证号码
在商户类型为企业时，与业务授权书二选一
	 **/
	private $legalCertNo;
	
	/** 
	 * 法人身份证反面图片url
请通过zhima.merchant.image.upload上传文件;
在商户类型为企业时，与业务授权书二选一
	 **/
	private $legalCertNoBackImageUrl;
	
	/** 
	 * 法人身份证正面图片url
请通过zhima.merchant.image.upload上传文件;
在商户类型为企业时，与业务授权书二选一
	 **/
	private $legalCertNoFrontImageUrl;
	
	/** 
	 * 法人身份证有效期结束日期;
在商户类型为企业时，与业务授权书二选一
	 **/
	private $legalCertValidEndDate;
	
	/** 
	 * 法人身份证有效期开始日期;
在商户类型为企业时，与业务授权书二选一
	 **/
	private $legalCertValidStartDate;
	
	/** 
	 * 法人姓名
在商户类型为企业时，与业务授权书二选一
	 **/
	private $legalName;
	
	/** 
	 * 证照图片url，请通过zhima.merchant.image.upload上传对应证照类型的图片，在商户类型为政府机构或者事业单位时，与业务授权书二选一
	 **/
	private $licenseImageUrl;
	
	/** 
	 * 证照号码
	 **/
	private $licenseNo;
	
	/** 
	 * 证照类型：
1:普通营业执照
2:多证合一
3:组织结构代码证
4:其他证照
company_type=1时，证照类型只能选择1和2；
company_type=2,3时，证照类型只能选择3和4
	 **/
	private $licenseType;
	
	/** 
	 * 芝麻二级商户图标的二进制流,最大100K(80*80),需要对图片的二进制流做Base64处理转化成字符串
	 **/
	private $logoImage;
	
	/** 
	 * 芝麻二级商户图标后缀：bmp, jpg, jpeg, png, gif
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
	 * 商户类型
1:企业
2:政府机构
3:事业单位
	 **/
	private $merchantType;
	
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
	 * 芝麻商户一级行业归属，芝麻提供
	 **/
	private $oneLevelMcc;
	
	/** 
	 * 组织结构代码证图片url,营业执照时普通类型时(废弃)
	 **/
	private $organizationImageUrl;
	
	/** 
	 * 组织机构代码，营业执照时普通类型时(废弃)
	 **/
	private $organizationNo;
	
	/** 
	 * 外部订单号
	 **/
	private $outOrderNo;
	
	/** 
	 * 代理人身份证号码(废弃)
	 **/
	private $proxyCertNo;
	
	/** 
	 * 代理人身份证反面图片url(废弃)
	 **/
	private $proxyCertNoBackImageUrl;
	
	/** 
	 * 代理人身份证正面图片url(废弃)
	 **/
	private $proxyCertNoFrontImageUrl;
	
	/** 
	 * 代理人身份证有效期结束日期(废弃)
	 **/
	private $proxyCertValidEndDate;
	
	/** 
	 * 代理人身份证有效期开始日期(废弃)
	 **/
	private $proxyCertValidStartDate;
	
	/** 
	 * 代理人委托书url地址(废弃)
	 **/
	private $proxyMandateUrl;
	
	/** 
	 * 代理人姓名(废弃)
	 **/
	private $proxyName;
	
	/** 
	 * 业务许可证图片url
请通过zhima.merchant.image.upload上传文件
	 **/
	private $qualificationImageUrl;
	
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
	 * 证照开始日期
	 **/
	private $startBusinessDate;
	
	/** 
	 * 芝麻商户二级行业归属，芝麻提供
	 **/
	private $twoLevelMcc;
	
	/** 
	 * 用户提供服务的微信公众号，如有请填写 支付宝服务窗，微信公众号，网站地址，应用名称必须是4选1
	 **/
	private $webchatAmount;
	
	/** 
	 * 为用户提供服务的网站，如有请填写 支付宝服务窗，微信公众号，网站地址，应用名称必须是4选1
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

	public function setAuthLetterUrl($authLetterUrl)
	{
		$this->authLetterUrl = $authLetterUrl;
		$this->apiParas["auth_letter_url"] = $authLetterUrl;
	}

	public function getAuthLetterUrl()
	{
		return $this->authLetterUrl;
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

	public function setCompanyAddress($companyAddress)
	{
		$this->companyAddress = $companyAddress;
		$this->apiParas["company_address"] = $companyAddress;
	}

	public function getCompanyAddress()
	{
		return $this->companyAddress;
	}

	public function setCompanyName($companyName)
	{
		$this->companyName = $companyName;
		$this->apiParas["company_name"] = $companyName;
	}

	public function getCompanyName()
	{
		return $this->companyName;
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

	public function setEndBusinessDate($endBusinessDate)
	{
		$this->endBusinessDate = $endBusinessDate;
		$this->apiParas["end_business_date"] = $endBusinessDate;
	}

	public function getEndBusinessDate()
	{
		return $this->endBusinessDate;
	}

	public function setLegalCertNo($legalCertNo)
	{
		$this->legalCertNo = $legalCertNo;
		$this->apiParas["legal_cert_no"] = $legalCertNo;
	}

	public function getLegalCertNo()
	{
		return $this->legalCertNo;
	}

	public function setLegalCertNoBackImageUrl($legalCertNoBackImageUrl)
	{
		$this->legalCertNoBackImageUrl = $legalCertNoBackImageUrl;
		$this->apiParas["legal_cert_no_back_image_url"] = $legalCertNoBackImageUrl;
	}

	public function getLegalCertNoBackImageUrl()
	{
		return $this->legalCertNoBackImageUrl;
	}

	public function setLegalCertNoFrontImageUrl($legalCertNoFrontImageUrl)
	{
		$this->legalCertNoFrontImageUrl = $legalCertNoFrontImageUrl;
		$this->apiParas["legal_cert_no_front_image_url"] = $legalCertNoFrontImageUrl;
	}

	public function getLegalCertNoFrontImageUrl()
	{
		return $this->legalCertNoFrontImageUrl;
	}

	public function setLegalCertValidEndDate($legalCertValidEndDate)
	{
		$this->legalCertValidEndDate = $legalCertValidEndDate;
		$this->apiParas["legal_cert_valid_end_date"] = $legalCertValidEndDate;
	}

	public function getLegalCertValidEndDate()
	{
		return $this->legalCertValidEndDate;
	}

	public function setLegalCertValidStartDate($legalCertValidStartDate)
	{
		$this->legalCertValidStartDate = $legalCertValidStartDate;
		$this->apiParas["legal_cert_valid_start_date"] = $legalCertValidStartDate;
	}

	public function getLegalCertValidStartDate()
	{
		return $this->legalCertValidStartDate;
	}

	public function setLegalName($legalName)
	{
		$this->legalName = $legalName;
		$this->apiParas["legal_name"] = $legalName;
	}

	public function getLegalName()
	{
		return $this->legalName;
	}

	public function setLicenseImageUrl($licenseImageUrl)
	{
		$this->licenseImageUrl = $licenseImageUrl;
		$this->apiParas["license_image_url"] = $licenseImageUrl;
	}

	public function getLicenseImageUrl()
	{
		return $this->licenseImageUrl;
	}

	public function setLicenseNo($licenseNo)
	{
		$this->licenseNo = $licenseNo;
		$this->apiParas["license_no"] = $licenseNo;
	}

	public function getLicenseNo()
	{
		return $this->licenseNo;
	}

	public function setLicenseType($licenseType)
	{
		$this->licenseType = $licenseType;
		$this->apiParas["license_type"] = $licenseType;
	}

	public function getLicenseType()
	{
		return $this->licenseType;
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

	public function setMerchantType($merchantType)
	{
		$this->merchantType = $merchantType;
		$this->apiParas["merchant_type"] = $merchantType;
	}

	public function getMerchantType()
	{
		return $this->merchantType;
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

	public function setOrganizationImageUrl($organizationImageUrl)
	{
		$this->organizationImageUrl = $organizationImageUrl;
		$this->apiParas["organization_image_url"] = $organizationImageUrl;
	}

	public function getOrganizationImageUrl()
	{
		return $this->organizationImageUrl;
	}

	public function setOrganizationNo($organizationNo)
	{
		$this->organizationNo = $organizationNo;
		$this->apiParas["organization_no"] = $organizationNo;
	}

	public function getOrganizationNo()
	{
		return $this->organizationNo;
	}

	public function setOutOrderNo($outOrderNo)
	{
		$this->outOrderNo = $outOrderNo;
		$this->apiParas["out_order_no"] = $outOrderNo;
	}

	public function getOutOrderNo()
	{
		return $this->outOrderNo;
	}

	public function setProxyCertNo($proxyCertNo)
	{
		$this->proxyCertNo = $proxyCertNo;
		$this->apiParas["proxy_cert_no"] = $proxyCertNo;
	}

	public function getProxyCertNo()
	{
		return $this->proxyCertNo;
	}

	public function setProxyCertNoBackImageUrl($proxyCertNoBackImageUrl)
	{
		$this->proxyCertNoBackImageUrl = $proxyCertNoBackImageUrl;
		$this->apiParas["proxy_cert_no_back_image_url"] = $proxyCertNoBackImageUrl;
	}

	public function getProxyCertNoBackImageUrl()
	{
		return $this->proxyCertNoBackImageUrl;
	}

	public function setProxyCertNoFrontImageUrl($proxyCertNoFrontImageUrl)
	{
		$this->proxyCertNoFrontImageUrl = $proxyCertNoFrontImageUrl;
		$this->apiParas["proxy_cert_no_front_image_url"] = $proxyCertNoFrontImageUrl;
	}

	public function getProxyCertNoFrontImageUrl()
	{
		return $this->proxyCertNoFrontImageUrl;
	}

	public function setProxyCertValidEndDate($proxyCertValidEndDate)
	{
		$this->proxyCertValidEndDate = $proxyCertValidEndDate;
		$this->apiParas["proxy_cert_valid_end_date"] = $proxyCertValidEndDate;
	}

	public function getProxyCertValidEndDate()
	{
		return $this->proxyCertValidEndDate;
	}

	public function setProxyCertValidStartDate($proxyCertValidStartDate)
	{
		$this->proxyCertValidStartDate = $proxyCertValidStartDate;
		$this->apiParas["proxy_cert_valid_start_date"] = $proxyCertValidStartDate;
	}

	public function getProxyCertValidStartDate()
	{
		return $this->proxyCertValidStartDate;
	}

	public function setProxyMandateUrl($proxyMandateUrl)
	{
		$this->proxyMandateUrl = $proxyMandateUrl;
		$this->apiParas["proxy_mandate_url"] = $proxyMandateUrl;
	}

	public function getProxyMandateUrl()
	{
		return $this->proxyMandateUrl;
	}

	public function setProxyName($proxyName)
	{
		$this->proxyName = $proxyName;
		$this->apiParas["proxy_name"] = $proxyName;
	}

	public function getProxyName()
	{
		return $this->proxyName;
	}

	public function setQualificationImageUrl($qualificationImageUrl)
	{
		$this->qualificationImageUrl = $qualificationImageUrl;
		$this->apiParas["qualification_image_url"] = $qualificationImageUrl;
	}

	public function getQualificationImageUrl()
	{
		return $this->qualificationImageUrl;
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

	public function setStartBusinessDate($startBusinessDate)
	{
		$this->startBusinessDate = $startBusinessDate;
		$this->apiParas["start_business_date"] = $startBusinessDate;
	}

	public function getStartBusinessDate()
	{
		return $this->startBusinessDate;
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
		return "zhima.merchant.enterprise.apply";
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
