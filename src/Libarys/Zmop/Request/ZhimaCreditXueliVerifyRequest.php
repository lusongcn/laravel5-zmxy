<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.credit.xueli.verify request
 *
 * @author auto create
 * @since 1.0, 2016-07-08 10:08:01
 */
class ZhimaCreditXueliVerifyRequest
{
	/** 
	 * 证件号码，暂时只支持身份证号
	 **/
	private $certNo;
	
	/** 
	 * 证件类型，暂时支持身份证
	 **/
	private $certType;
	
	/** 
	 * 院校名称
	 **/
	private $collegeName;
	
	/** 
	 * 学历类别：普通，研究生，成人，高等教育自学考试，网络教育，开放教育，不详
	 **/
	private $educationCategory;
	
	/** 
	 * 学历层次：
博士研究生，硕士研究生，研究生班，
第二学士学位，本科，高升本，专升本，第二本科
专科，专科(高职)，第二专科，夜大电大函大普通班，大学
	 **/
	private $educationDegree;
	
	/** 
	 * 毕业年份，格式为四位数的年份，如2018
	 **/
	private $graduateYear;
	
	/** 
	 * 姓名
	 **/
	private $name;
	
	/** 
	 * 产品码
	 **/
	private $productCode;
	
	/** 
	 * 商户传入的业务流水号。此字段由商户生成，需确保唯一性，用于定位每一次请求，后续按此流水进行对帐。生成规则: 固定30位数字串，前17位为精确到毫秒的时间yyyyMMddHHmmssSSS，后13位为自增数字。
	 **/
	private $transactionId;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
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

	public function setCollegeName($collegeName)
	{
		$this->collegeName = $collegeName;
		$this->apiParas["college_name"] = $collegeName;
	}

	public function getCollegeName()
	{
		return $this->collegeName;
	}

	public function setEducationCategory($educationCategory)
	{
		$this->educationCategory = $educationCategory;
		$this->apiParas["education_category"] = $educationCategory;
	}

	public function getEducationCategory()
	{
		return $this->educationCategory;
	}

	public function setEducationDegree($educationDegree)
	{
		$this->educationDegree = $educationDegree;
		$this->apiParas["education_degree"] = $educationDegree;
	}

	public function getEducationDegree()
	{
		return $this->educationDegree;
	}

	public function setGraduateYear($graduateYear)
	{
		$this->graduateYear = $graduateYear;
		$this->apiParas["graduate_year"] = $graduateYear;
	}

	public function getGraduateYear()
	{
		return $this->graduateYear;
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
		return "zhima.credit.xueli.verify";
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
