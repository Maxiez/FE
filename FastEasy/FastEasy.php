<?php



$a = explode('/',$_SERVER[PATH_INFO]);
if(!$a['1']) $a['1'] = 'Index';
require_once("APP/Controller/".$a['1']."Controller.class.php");
if(!$a['2']) $a['2'] = 'index';
call_user_func($a['2'].'Action');




?>	