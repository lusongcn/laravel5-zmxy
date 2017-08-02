芝麻信用是支付宝根据用户信息返回风控风险以及用户信用评分，主要用于：`P2P网贷`,`租车`,`共享经济信用评分`,`旅行或者酒店类`等中，芝麻信用接口比较多，如果自己单独去开发，会浪费一定的时间，所以我集成了Laravel芝麻信用拓展，方便大家学习管理，如果由任何疑问，欢迎

#### 开发前的准备
1. 安装Laravel
1. 申请通过[芝麻商家](https://b.zmxy.com.cn/login/index.htm)
1. 创建一个应用并且获取基本配置信息，详细流程[开始接入](https://b.zmxy.com.cn/technology/openDoc.htm?relInfo=MERCHANT_ENTERING)

#### 安装拓展
1.在 `composer.json` 的 `require` 里面加入以下内容：
```composer
composer require "earnp/zmxy:dev-master"
```

2.等待下载安装完成，需要在`config/app.php`中注册服务提供者同时注册下相应门面：
```php
'providers' => [
    //........
    Earnp\Zmxy\ZmxyServiceprovider::class,
],

'aliases' => [
    //..........
    'Zmxy'      => Earnp\Zmxy\Facades\Zmxy::class,
],
```
服务注入以后，如果要使用自定义的配置，还可以发布配置文件到config目录：
```composer
php artisan vendor:publish
```

#### 使用方法

##### 获取登陆授权链接
```php
Zmxy::ZhimaAuthInfoAuthorize($name,$idcard);
```

参数说明：
- $name为用户姓名
- $idcard为用户身份证号码

返回参数：
```php
https://zmopenapi.zmxy.com.cn/openapi.do?app_id=1000000&channel=apppc&charset=UTF-8&method=zhima.auth.info.authorize&platform=zmop&sign=sign&version=1.0&params=params
```
将会返回授权链接，你将链接设置为a标签，给用户点击使用，注意：授权成功以后会返回您授权的地址，将会给你返回`$sign`和`$params`参数用于下面的获取参数

##### 根据获取的`$params`换取`open_id`
```php
Zmxy::getResult($params,$sign);
```
参数说明：
- $params为上一部中授权返回的参数
- $sign为上一部中授权返回的参数

返回参数：
```php
[
  "open_id" => "",
  "error_message" => "操作成功",
  "state" => "success",
  "error_code" => "SUCCESS",
  "app_id" => "1004070",
  "success" => "true",
]
```

##### 芝麻信用评分
```php
Zmxy::ZhimaCreditScoreGetRequest($open_id);
```
请求参数:
- $open_id为上一步获取到的$open_id

返回参数(对象)：
```php
[
  "success"=>true,
  "biz_no"=>"",
  // 以后芝麻分
  "zm_score"=>"750",
]
```

##### 行业关注名单
```php
Zmxy::ZhimaCreditWatchlistiiGet($open_id);
```
请求参数:
- $open_id为上面授权获取到的$open_id

返回参数(对象)：
返回参数比较多，具体可以参考官方文档：https://b.zmxy.com.cn/technology/openDoc.htm?relInfo=zhima.credit.watchlistii.get@1.0@1.0

#### 申请欺诈评分
```php
$data = array("idcard"=>"必须","name"=>"必须","phone"=>"必须","email"=>"选填","bankcard"=>"选填:银行卡号","address"=>"选填:不要包含特殊字符","ip"=>"ip地址:选填","mac"=>"物理地址:选填","wifimac"=>"wifi的物理地址:选填","imei"=>"国际移动设备标志:选填");
// 调取接口
Zmxy::ZhimaCreditAntifraudScoreGet($data);
```
请求参数：
- $data,包含查询用户基本信息，无需授权，姓名身份证必须准确，更多描述查看[芝麻信用](https://b.zmxy.com.cn/technology/openDoc.htm?relInfo=zhima.credit.antifraud.score.get@1.0@1.1&relType=API_DOC&LEFT_MENU_MODE=null&view_mode=null)

返回参数(对象)：
```php
[
  "success"=>true,
  "biz_no"=> "",
  "score"=>88,
]
```
`score` 为信用评分，分值越高，欺诈越小

#### 欺诈信息验证
```php
$data = array("idcard"=>"必须","name"=>"必须","phone"=>"必须","email"=>"选填","bankcard"=>"选填:银行卡号","address"=>"选填:不要包含特殊字符","ip"=>"ip地址:选填","mac"=>"物理地址:选填","wifimac"=>"wifi的物理地址:选填","imei"=>"国际移动设备标志:选填");
// 调取接口
Zmxy::ZhimaCreditAntifraudVerify($data);
```
请求参数：
- $data,包含查询用户基本信息，无需授权，姓名身份证必须准确，更多描述查看[芝麻信用](https://b.zmxy.com.cn/technology/openDoc.htm?relInfo=zhima.credit.antifraud.score.get@1.0@1.1&relType=API_DOC&LEFT_MENU_MODE=null&view_mode=null)

返回参数（对象）：
```php
[
  "success"=>true,
  "biz_no"=> "",
  "verify_code"=> [
    0 => "V_CN_NM_MA",
    1 => "V_PH_CN_MA_UL30D",
    2 => "V_EM_CN_MA",
    3 => "V_AD_CN_MA_UL180D",
    4 => "V_AD_CN_MA_HOME",
  ]
]
```
verify_code中的参数说明如下： 
在`config/zmxy.php`中

#### 欺诈关注清单
```php
$data = array("idcard"=>"必须","name"=>"必须","phone"=>"必须","email"=>"选填","bankcard"=>"选填:银行卡号","address"=>"选填:不要包含特殊字符","ip"=>"ip地址:选填","mac"=>"物理地址:选填","wifimac"=>"wifi的物理地址:选填","imei"=>"国际移动设备标志:选填");
// 调取接口
Zmxy::ZhimaCreditAntifraudRiskList($data);
```
参数说明：
- 如上所说

返回参数：
```php
[
  "success"=>true,
  "biz_no"=>"",
  "hit"=>"yes",
  "risk_code"=>[
    0 => "R_CN_JJ_02",
    1 => "R_CN_JJ_03",
    2 => "R_PH_006",
    3 => "R_PH_JJ_02",
    4 => "R_PH_JJ_03",
  ]
]
```
verify_code代表风险级别，其中的参数说明如下：
在`config/zmxy.php`中

好的，到这里全部接口完毕，后期会持续迭代，欢迎讨论以及给星！