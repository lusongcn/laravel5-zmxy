<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.customer.certification.material.certify request
 *
 * @author auto create
 * @since 1.0, 2017-06-05 13:42:56
 */
class ZhimaCustomerCertificationMaterialCertifyRequest
{
	/** 
	 * 认证场景码，支持的场景码有： 
FACE_API：通过接口进行人脸识别
签约的协议决定了可以使用的场景
	 **/
	private $bizCode;
	
	/** 
	 * 扩展业务参数，暂时没有用到，接口预留
	 **/
	private $extBizParam;
	
	/** 
	 * 值为一个json串，必须指定身份类型identity_type，不同的身份类型对应的身份信息不同
当前支持：
身份信息为证件信息，identity_type值为CERT_INFO:
证件类型为身份证cert_type值为IDENTITY_CARD,必要信息cert_type，cert_name和cert_no；
身份信息为个人正面照片，identity_type值为FACIAL_PICTURE_FRONT:
必要信息cert_type，cert_name和cert_no和FACIAL_PICTURE_FRONT
示例：{"identity_type": "FACIAL_PICTURE_FRONT", "cert_type": "IDENTITY_CARD", "cert_name": "收委", "cert_no": "260104197909275964", "FACIAL_PICTURE_FRONT": "/9j/4AAQSkZJR"}
	 **/
	private $identityParam;
	
	/** 
	 * 认证过程中需要的认证材料，不同认证场景需要的材料不同
biz_code值为FACE_API时需要材料FACIAL_PICTURE_FRONT
	 **/
	private $materials;
	
	/** 
	 * 认证商户自定义配置，支持一些商户可选的功能
	 **/
	private $merchantConfig;
	
	/** 
	 * 芝麻认证产品码,示例值为真实的产品码
	 **/
	private $productCode;
	
	/** 
	 * 商户请求的唯一标志，32位长度的字母数字下划线组合。该标识作为对账的关键信息，商户要保证其唯一性.建议:前面几位字符是商户自定义的简称,中间可以使用一段日期,结尾可以使用一个序列
	 **/
	private $transactionId;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setExtBizParam($extBizParam)
	{
		$this->extBizParam = $extBizParam;
		$this->apiParas["ext_biz_param"] = $extBizParam;
	}

	public function getExtBizParam()
	{
		return $this->extBizParam;
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

	public function setMaterials($materials)
	{
		$this->materials = $materials;
		$this->apiParas["materials"] = $materials;
	}

	public function getMaterials()
	{
		return $this->materials;
	}

	public function setMerchantConfig($merchantConfig)
	{
		$this->merchantConfig = $merchantConfig;
		$this->apiParas["merchant_config"] = $merchantConfig;
	}

	public function getMerchantConfig()
	{
		return $this->merchantConfig;
	}

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

	public function getApiMethodName()
	{
		return "zhima.customer.certification.material.certify";
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
