<?php
use Workerman\Worker;
use Workerman\Protocols\Http;
use WebWorker\Libs\Mredis;

require 'vendor/autoload.php';

$app = new WebWorker\App("http://0.0.0.0:1215");

//进程数
$app->count = 40;

//自动加载目录--会加载目录下的所有php文件
$app->autoload = array();

$config = array();
$config["host"] = "127.0.0.1";
$config["port"] = 6379;
$config["password"] = "123456";
$config["db"] = 1;

//注册路由
$app->HandleFunc("/",function() use($app,$config){
    $redis = Mredis::getInstance($config);
    $app->ServerHtml($redis->get("xtgxiso"));
});

// Run worker
Worker::runAll();
