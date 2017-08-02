<?php
/**
 * ZHIMA API: zhima.data.single.feedback request
 *
 * @author auto create
 * @since 1.0, 2016-03-31 14:34:57
 */
class ZhimaDataSingleFeedbackRequest
{
	/** 
	 * 扩展参数
	 **/
	private $bizExtParams;
	
	/** 
	 * 反馈的json格式的数据内容
	 **/
	private $data;
	
	/** 
	 * 主键使用反馈字段进行组合，也可以使用反馈的某个单字段（确保主键稳定，而且可以很好的区分不同的数据）。例如order_no#pay_month或者order_no#bill_month组合，对于一个order_no只会有一条数据的情况，直接使用order_no作为主键
	 **/
	private $identity;
	
	/** 
	 * 芝麻系统中配置的值，由芝麻信用提供，需要匹配，测试反馈和正式反馈使用不同的TYPE_ID
	 **/
	private $typeId;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setBizExtParams($bizExtParams)
	{
		$this->bizExtParams = $bizExtParams;
		$this->apiParas["biz_ext_params"] = $bizExtParams;
	}

	public function getBizExtParams()
	{
		return $this->bizExtParams;
	}

	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setIdentity($identity)
	{
		$this->identity = $identity;
		$this->apiParas["identity"] = $identity;
	}

	public function getIdentity()
	{
		return $this->identity;
	}

	public function setTypeId($typeId)
	{
		$this->typeId = $typeId;
		$this->apiParas["type_id"] = $typeId;
	}

	public function getTypeId()
	{
		return $this->typeId;
	}

	public function getApiMethodName()
	{
		return "zhima.data.single.feedback";
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
