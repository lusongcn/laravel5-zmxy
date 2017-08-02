<?php
/**
 * ZHIMA API: zhima.credit.sharerisk.get request
 *
 * @author auto create
 * @since 1.0, 2016-03-31 14:34:57
 */
class ZhimaCreditShareriskGetRequest
{
	/** 
	 * 业务申请单号
	 **/
	private $bizApplyNo;
	
	/** 
	 * 授权合同编号
	 **/
	private $bizAuthNo;
	
	/** 
	 * 业务场景[01： 申贷审批； 02： 贷后管理]
	 **/
	private $bizScene;
	
	/** 
	 * 证件号码
	 **/
	private $certNo;
	
	/** 
	 * 证件类型[100：身份证]
	 **/
	private $certType;
	
	/** 
	 * 姓名
	 **/
	private $name;
	
	/** 
	 * 产品码
	 **/
	private $productCode;
	
	/** 
	 * 商户传入的业务流水号。此字段由商户生成，需确保唯一性，用于定位每一次请求，后续按此流水进行对帐。生成规则: 固定30位数字串，前17位为精确到毫秒的时间yyyyMMddhhmmssSSS，后13位为自增数字。
	 **/
	private $transactionId;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setBizApplyNo($bizApplyNo)
	{
		$this->bizApplyNo = $bizApplyNo;
		$this->apiParas["biz_apply_no"] = $bizApplyNo;
	}

	public function getBizApplyNo()
	{
		return $this->bizApplyNo;
	}

	public function setBizAuthNo($bizAuthNo)
	{
		$this->bizAuthNo = $bizAuthNo;
		$this->apiParas["biz_auth_no"] = $bizAuthNo;
	}

	public function getBizAuthNo()
	{
		return $this->bizAuthNo;
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

	public function setCertNo($certNo)
	{
		$this->certNo = $certNo;
		$this->apiParas["cert_no"] = $certNo;
	}

	public function getCertNo()
	{
		return $this->certNo;
	}

	public function setCertType($certType)
	{
		$this->certType = $certType;
		$this->apiParas["cert_type"] = $certType;
	}

	public function getCertType()
	{
		return $this->certType;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
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
		return "zhima.credit.sharerisk.get";
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
