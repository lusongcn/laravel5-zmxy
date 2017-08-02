<?php
/**
 * ZHIMA API: zhima.auth.info.freeze request
 *
 * @author auto create
 * @since 1.0, 2016-03-31 14:34:57
 */
class ZhimaAuthInfoFreezeRequest
{
	/** 
	 * 用户在商户处申请业务的唯一识别码;\n每个申请仅对应一条冻结记录，若存在相同流水号的冻结周期将覆盖
	 **/
	private $bizNo;
	
	/** 
	 * 扩展字段，json字符串的key-value格式
	 **/
	private $bizParams;
	
	/** 
	 * 申请原因
001: 贷款申请中, 002:信用卡申请中, 003:租车申请中, 004:信贷服务期内, 005:信贷逾期中
	 **/
	private $bizType;
	
	/** 
	 * 冻结结束时间，若该时间减去冻结开始时间的差值大于冻结周期，则该时间将赋值冻结开始时间+冻结周期
	 **/
	private $endDate;
	
	/** 
	 * 用户在商端的身份标识
	 **/
	private $openId;
	
	/** 
	 * 冻结开始时间，若该时间早于系统当前时间，则会取当前时间作为冻结开始时间
	 **/
	private $startDate;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setBizNo($bizNo)
	{
		$this->bizNo = $bizNo;
		$this->apiParas["biz_no"] = $bizNo;
	}

	public function getBizNo()
	{
		return $this->bizNo;
	}

	public function setBizParams($bizParams)
	{
		$this->bizParams = $bizParams;
		$this->apiParas["biz_params"] = $bizParams;
	}

	public function getBizParams()
	{
		return $this->bizParams;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setOpenId($openId)
	{
		$this->openId = $openId;
		$this->apiParas["open_id"] = $openId;
	}

	public function getOpenId()
	{
		return $this->openId;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "zhima.auth.info.freeze";
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
