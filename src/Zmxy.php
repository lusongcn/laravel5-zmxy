<?php 
namespace Earnp\Zmxy;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Earnp\Zmxy\Libarys\Zmop\ZmopClient;
use Earnp\Zmxy\Libarys\Zmop\Request\ZhimaCreditScoreGetRequest;
use Earnp\Zmxy\Libarys\Zmop\Request\ZhimaAuthInfoAuthorizeRequest;
use Earnp\Zmxy\Libarys\Zmop\Request\ZhimaCreditWatchlistiiGetRequest;
use Earnp\Zmxy\Libarys\Zmop\Request\ZhimaCreditAntifraudScoreGetRequest;
use Earnp\Zmxy\Libarys\Zmop\Request\ZhimaCreditAntifraudVerifyRequest;
use Earnp\Zmxy\Libarys\Zmop\Request\ZhimaCreditAntifraudRiskListRequest;

class Zmxy
{
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */

    // 芝麻信用评分
    public function ZhimaCreditScoreGetRequest($open_id)
    {
        $config=Config::get("zmxy.zmxy");
        $client = new ZmopClient($config["gatewayUrl"],$config["appId"],$config["charset"],$config["privateKeyFile"],$config["zmPublicKeyFile"]);
        $request = new ZhimaCreditScoreGetRequest();
        $request->setChannel("apppc");
        $request->setPlatform("zmop");
        // transactionid需要自己生成的，保证每次请求唯一
        $request->setTransactionId(rand(100000000000000,999999999999999));// 必要参数 
        // 产品码是写死的
        $request->setProductCode("w1010100100000000001");// 必要参数 
        $request->setOpenId($open_id);// 必要参数 
        $response = $client->execute($request);
        return $response;
    }

    // 芝麻信用参数解析
    public function getResult($params,$sign) {
        //从回调URL中获取sign参数，此处为示例值
        // 判断串中是否有%，有则需要decode
        $config=Config::get("zmxy.zmxy");
        $params = strstr($params,'%')?urldecode($params):$params;
        $sign = strstr($sign,'%')?urldecode($sign):$sign;
        
        $client = new ZmopClient($config["gatewayUrl"],$config["appId"],$config["charset"],$config["privateKeyFile"],$config["zmPublicKeyFile"]);
        $result = $client->decryptAndVerifySign($params, $sign);
        parse_str(@array_pop(explode('?', $result)), $a);
        return $a;
    }

    // 页面授权
    public function ZhimaAuthInfoAuthorize($name,$idcard){
        $config=Config::get("zmxy.zmxy");
        $client = new ZmopClient($config["gatewayUrl"],$config["appId"],$config["charset"],$config["privateKeyFile"],$config["zmPublicKeyFile"]);
        $request = new ZhimaAuthInfoAuthorizeRequest();
        $request->setChannel("apppc");
        $request->setPlatform("zmop");
        $request->setIdentityType("2");// 必要参数 
        $request->setIdentityParam(json_encode(array("name"=>$name,"certType"=>"IDENTITY_CARD","certNo"=>$idcard)));// 必要参数
        $request->setBizParams("{\"auth_code\":\"M_H5\",\"channelType\":\"app\",\"state\":\"success\"}");// 
        $url = $client->generatePageRedirectInvokeUrl($request);
        return $url;
    }

    // 行业关注名单
    public function ZhimaCreditWatchlistiiGet($open_id){
        $config=Config::get("zmxy.zmxy");
        $client = new ZmopClient($config["gatewayUrl"],$config["appId"],$config["charset"],$config["privateKeyFile"],$config["zmPublicKeyFile"]);
        $request = new ZhimaCreditWatchlistiiGetRequest();
        $request->setChannel("apppc");
        $request->setPlatform("zmop");
        $request->setProductCode("w1010100100000000022");// 必要参数 
        $request->setTransactionId(rand(100000000000000,999999999999999));// 必要参数 
        $request->setOpenId($open_id);// 必要参数 
        $response = $client->execute($request);
        return $response;
    }

    // 申请欺诈评分
    public function ZhimaCreditAntifraudScoreGet($data){
        $config=Config::get("zmxy.zmxy");
        $client = new ZmopClient($config["gatewayUrl"],$config["appId"],$config["charset"],$config["privateKeyFile"],$config["zmPublicKeyFile"]);
        $request = new ZhimaCreditAntifraudScoreGetRequest();
        $request->setChannel("apppc");
        $request->setPlatform("zmop");
        $request->setProductCode("w1010100003000001100");// 必要参数 
        $request->setTransactionId(rand(100000000000000,999999999999999));// 必要参数 
        $request->setCertType("IDENTITY_CARD");// 必要参数 
        $request->setCertNo($data["idcard"]);// 必要参数 
        $request->setName($data["name"]);// 必要参数 
        $request->setMobile($data["phone"]);// 
        $request->setEmail($data["email"]);// 
        $request->setBankCard($data["bankcard"]);// 
        $request->setAddress($data["address"]);// 
        $request->setIp($data["ip"]);// ip地址
        $request->setMac($data["mac"]);// 物理地址
        $request->setWifimac($data["wifimac"]);// 
        $request->setImei($data["imei"]);// 
        $response = $client->execute($request);
        return $response;
    }

    // 欺诈信息验证
    public function ZhimaCreditAntifraudVerify($data){
        $config=Config::get("zmxy.zmxy");
        $client = new ZmopClient($config["gatewayUrl"],$config["appId"],$config["charset"],$config["privateKeyFile"],$config["zmPublicKeyFile"]);
        $request = new ZhimaCreditAntifraudVerifyRequest();
        $request->setChannel("apppc");
        $request->setPlatform("zmop");
        $request->setProductCode("w1010100000000002859");// 必要参数 
        $request->setTransactionId(rand(100000000000000,999999999999999));// 必要参数 
        $request->setCertType("IDENTITY_CARD");// 必要参数 
        $request->setCertNo($data["idcard"]);// 必要参数 
        $request->setName($data["name"]);// 必要参数 
        $request->setMobile($data["phone"]);// 
        $request->setEmail($data["email"]);// 
        $request->setBankCard($data["bankcard"]);// 
        $request->setAddress($data["address"]);// 
        $request->setIp($data["ip"]);// ip地址
        $request->setMac($data["mac"]);// 物理地址
        $request->setWifimac($data["wifimac"]);// 
        $request->setImei($data["imei"]);// 
        $response = $client->execute($request);
        return $response;
    }

    // 欺诈关注清单
    public function ZhimaCreditAntifraudRiskList($data){
        $config=Config::get("zmxy.zmxy");
        $client = new ZmopClient($config["gatewayUrl"],$config["appId"],$config["charset"],$config["privateKeyFile"],$config["zmPublicKeyFile"]);
        $request = new ZhimaCreditAntifraudRiskListRequest();
        $request->setChannel("apppc");
        $request->setPlatform("zmop");
        $request->setProductCode("w1010100003000001283");// 必要参数 
        $request->setTransactionId(rand(100000000000000,999999999999999));// 必要参数 
        $request->setCertType("IDENTITY_CARD");// 必要参数 
        $request->setCertNo($data["idcard"]);// 必要参数 
        $request->setName($data["name"]);// 必要参数 
        $request->setMobile($data["phone"]);// 
        $request->setEmail($data["email"]);// 
        $request->setBankCard($data["bankcard"]);// 
        $request->setAddress($data["address"]);// 
        $request->setIp($data["ip"]);// ip地址
        $request->setMac($data["mac"]);// 物理地址
        $request->setWifimac($data["wifimac"]);// 
        $request->setImei($data["imei"]);// 
        $response = $client->execute($request);
        return $response;
    }
    

}