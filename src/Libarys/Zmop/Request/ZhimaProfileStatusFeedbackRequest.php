<?php
/**
 * ZHIMA API: zhima.profile.status.feedback request
 *
 * @author auto create
 * @since 1.0, 2016-03-31 14:36:04
 */
class ZhimaProfileStatusFeedbackRequest
{
	/** 
	 * 业务号
	 **/
	private $bizNo;
	
	/** 
	 * 业务类型
	 **/
	private $bizType;
	
	/** 
	 * 当前为BANK或者ACCUFUND
	 **/
	private $dataSource;
	
	/** 
	 * 数据抓取code
	 **/
	private $itemCode;
	
	/** 
	 * 更新备注
	 **/
	private $memo;
	
	/** 
	 * 数据采集机构
	 **/
	private $orgCode;
	
	/** 
	 * 数据状态
	 **/
	private $status;

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

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setDataSource($dataSource)
	{
		$this->dataSource = $dataSource;
		$this->apiParas["data_source"] = $dataSource;
	}

	public function getDataSource()
	{
		return $this->dataSource;
	}

	public function setItemCode($itemCode)
	{
		$this->itemCode = $itemCode;
		$this->apiParas["item_code"] = $itemCode;
	}

	public function getItemCode()
	{
		return $this->itemCode;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setOrgCode($orgCode)
	{
		$this->orgCode = $orgCode;
		$this->apiParas["org_code"] = $orgCode;
	}

	public function getOrgCode()
	{
		return $this->orgCode;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "zhima.profile.status.feedback";
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
