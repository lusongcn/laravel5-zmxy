<?php
namespace Earnp\Zmxy\Libarys\Zmop\Request;
/**
 * ZHIMA API: zhima.merchant.closeloop.data.upload request
 *
 * @author auto create
 * @since 1.0, 2017-06-14 16:58:00
 */
class ZhimaMerchantCloseloopDataUploadRequest
{
	/** 
	 * 扩展参数
	 **/
	private $bizExtParams;
	
	/** 
	 * 单条数据的数据列，多个列以逗号隔开。
	 **/
	private $columns;
	
	/** 
	 * 传入的json格式的文件，其中{"records":  是每个文件的固定开头。
	 **/
	private $file;
	
	/** 
	 * 是传入文件的数据编码，如果文件格式是UTF-8，则填写UTF-8，如果文件格式是GBK，则填写GBK
	 **/
	private $fileCharset;
	
	/** 
	 * 主键列使用反馈字段进行组合，也可以使用反馈的某个单字段（确保主键稳定，而且可以很好的区分不同的数据）。例如order_no,pay_month或者order_no,bill_month组合，对于一个order_no只会有一条数据的情况，直接使用order_no作为主键列
	 **/
	private $primaryKeyColumns;
	
	/** 
	 * 文件数据记录条数
	 **/
	private $records;
	
	/** 
	 * 场景码，用于标识上传的文件的用途，不同的场景码，file中的json格式不一样
	 **/
	private $sceneCode;

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

	public function setColumns($columns)
	{
		$this->columns = $columns;
		$this->apiParas["columns"] = $columns;
	}

	public function getColumns()
	{
		return $this->columns;
	}

	public function setFile($file)
	{
		$this->file = $file;
		$this->fileParas["file"] = $file;
	}

	public function getFile()
	{
		return $this->file;
	}

	public function setFileCharset($fileCharset)
	{
		$this->fileCharset = $fileCharset;
		$this->apiParas["file_charset"] = $fileCharset;
	}

	public function getFileCharset()
	{
		return $this->fileCharset;
	}

	public function setPrimaryKeyColumns($primaryKeyColumns)
	{
		$this->primaryKeyColumns = $primaryKeyColumns;
		$this->apiParas["primary_key_columns"] = $primaryKeyColumns;
	}

	public function getPrimaryKeyColumns()
	{
		return $this->primaryKeyColumns;
	}

	public function setRecords($records)
	{
		$this->records = $records;
		$this->apiParas["records"] = $records;
	}

	public function getRecords()
	{
		return $this->records;
	}

	public function setSceneCode($sceneCode)
	{
		$this->sceneCode = $sceneCode;
		$this->apiParas["scene_code"] = $sceneCode;
	}

	public function getSceneCode()
	{
		return $this->sceneCode;
	}

	public function getApiMethodName()
	{
		return "zhima.merchant.closeloop.data.upload";
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
