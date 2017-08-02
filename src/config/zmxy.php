<?php
return [
    "zmxy" => [
        //芝麻信用网关地址
        "gatewayUrl" => "https://zmopenapi.zmxy.com.cn/openapi.do",
        //商户私钥文件
        "privateKeyFile" => "/var/www/test/app/Libarys/Zhima/keys/private_key.pem",
        //芝麻公钥文件
        "zmPublicKeyFile" => "/var/www/test/app/Libarys/Zhima/keys/public_key.pem",
        //数据编码格式
        "charset" => "UTF-8",
        //芝麻分配给商户的 appId
        "appId" => "1004070",
    ],

];
