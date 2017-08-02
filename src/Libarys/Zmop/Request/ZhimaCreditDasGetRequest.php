<?php
/**
 * ZHIMA API: zhima.credit.das.get request
 *
 * @author auto create
 * @since 1.0, 2016-08-09 15:08:01
 */
class ZhimaCreditDasGetRequest
{
	/** 
	 * 合约外标，服务标识。签约过后将会收到含有该服务标识的邮件，或者向协同您签约的芝麻合作人员索取。
	 **/
	private $contractFlag;
	
	/** 
	 * 扩展参数，JSON字符串格式。当前该字段为保留字段，请忽略该参数，或者赋空值: {}
	 **/
	private $extParas;
	
	/** 
	 * 芝麻会员在商户端的身份标识
	 **/
	private $openId;
	
	/** 
	 * 云产品产品码
	 **/
	private $productCode;
	
	/** 
	 * transaction_id是代表一笔请求的唯一标志，该标识作为对账的关键信息，对于用户使用相同transaction_id的查询，芝麻在一天（86400秒）内返回首次查询数据，超过有效期的查询即为无效并返回异常（错误码xxxx），有效期内的重复查询不重新计费。 transaction_id 推荐生成方式是：30位，（其中17位时间值（精确到毫秒）：yyyyMMddHHmmssSSS）加上（13位自增数字：1234567890123）
	 **/
	private $transactionId;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setContractFlag($contractFlag)
	{
		$this->contractFlag = $contractFlag;
		$this->apiParas["contract_flag"] = $contractFlag;
	}

	public function getContractFlag()
	{
		return $this->contractFlag;
	}

	public function setExtParas($extParas)
	{
		$this->extParas = $extParas;
		$this->apiParas["ext_paras"] = $extParas;
	}

	public function getExtParas()
	{
		return $this->extParas;
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
		return "zhima.credit.das.get";
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
