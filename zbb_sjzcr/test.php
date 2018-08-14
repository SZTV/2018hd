<?php
require_once './source/class/class_core.php';
$kldapp = C::app();
$kldapp->reject_robot();
$kldapp->init();
$appid = $_G['config']['WX']['APPID'];
$appkey = $_G['config']['WX']['APPSECRET'];
require_once "jssdk.php";
$jssdk = new JSSDK($appid,$appkey);
$signPackage = $jssdk->getAccessToken();
var_dump($signPackage);
?>