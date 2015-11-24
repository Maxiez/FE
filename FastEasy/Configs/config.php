<?php

$mydbhost   = "localhost";
$mydbuser   = "root";
$mydbpw     ="";
$mydbname   ="news_php100";
$mydbcharset="UTF8";

//=======================
$smarty_template_dir    ='APP/View/';
$smarty_compile_dir     ='APP/Runtime/Template_c/';
$smarty_config_dir    ='FastEasy/Configs/';
$smarty_cache_dir     ='APP/Runtime/Cache/';
$smarty_caching       =FALSE;
$smarty_delimiter     =explode("|","{%|%}");

ini_set('date.timezone','Asia/Shanghai');  //设置时区

?>
