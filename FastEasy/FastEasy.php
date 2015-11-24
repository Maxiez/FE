<?php


require_once('FastEasy/global.php');




//路由解析跳转规则
$a = explode('/',$_SERVER[PATH_INFO]);
if(!$a['1']) $a['1'] = 'Index';
require_once("APP/Controller/".$a['1']."Controller.class.php");
if(!$a['2']) $a['2'] = 'index';

$classname = $a['1']."Controller";
// echo $a['1'].'Controller'.PHP_EOL;
// echo $a['2'].'Action'.PHP_EOL;

 $b = new $classname();

call_user_func(array($a['1'].'Controller',$a['2'].'Action'));

echo '3333';









?>	