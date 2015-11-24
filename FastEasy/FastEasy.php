<?php


require_once('FastEasy/global.php');




//路由解析跳转规则
$url_arr = explode('/',$_SERVER[PATH_INFO]);
$class_name = $url_arr['1'];
$action_name = $url_arr['2'];
if(!$class_name) $class_name = 'Index';
require_once("APP/Controller/".$class_name."Controller.class.php");
if(!$action_name) $action_name = 'index';

$class_full_name = $class_name."Controller";
$action_full_name = $action_name.'Action';

$page_object = new $class_full_name($class_name,$action_name);
$page_object->$action_full_name();











?>	