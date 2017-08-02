<?php
namespace Earnp\Zmxy\Libarys\Zmop;
/**
 * Created by PhpStorm.
 * User: dengpeng.zdp
 * Date: 2015/9/28
 * Time: 19:25
 */

class WebUtil{

    /**
     * 将传入的参数组织成key1=value1&key2=value2形式的字符串
     * @param $params
     * @return string
     */
    public static function buildQueryWithoutEncode($params) {
       return WebUtil::buildQuery($params, false);
    }

    public static function buildQueryWithEncode($params){
        return WebUtil::buildQuery($params, true);
    }

    public static function buildQuery($params, $needEncode){
        ksort($params);
        $stringToBeSigned = "";
        $i = 0;
        foreach ($params as $k => $v) {
            if (false === WebUtil::checkEmpty($v)) {
                if($needEncode){
                    $v = urlencode($v);
                }

                if ($i == 0) {
                    $stringToBeSigned .= "$k" . "=" . "$v";
                } else {
                    $stringToBeSigned .= "&" . "$k" . "=" . "$v";
                }
                $i++;
            }
        }
        unset ($k, $v);
        return $stringToBeSigned;
    }

    /**
     *  校验$value是否非空
     *  if not set ,return true;
     *  if is null , return true;
     * @param $value
     * @return bool
     */
    public static function checkEmpty($value) {
        if (!isset($value))
            return true;
        if ($value === null)
            return true;
        if (trim($value) === "")
            return true;

        return false;
    }

    /**
     * 向服务器发起post请求
     * @param $url 服务器地址
     * @param null $postFields 请求参数
     * @param $charset 字符集
     * @return mixed 服务器返回的值
     * @throws Exception post异常
     */
    public static function curl($url, $postFields = null, $charset) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //$headers = array('content-type: application/x-www-form-urlencoded;charset=' . $charset);
        //curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch), 0);
        } else {
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode) {
                throw new Exception($response, $httpStatusCode);
            }
        }
        curl_close($ch);
        return $response;
    }
	
	/**
     * post文件上传路径处理
     * php5.5+使用CURLFile，否则拼@
     *
     * @param $filePath 上传文件本地路径
     * @return mixed
     */
    public static function getFilePath($filePath) {
        if (class_exists ( 'CURLFile' )) {
            return new CURLFile ( $filePath );
        } else {
            return "@" . $filePath;
        }
    }
}