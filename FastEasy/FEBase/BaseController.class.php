<?php

abstract class FEdex_Action 
{



	public $view;
	public $Class,$Action;

	public function __construct($Class,$Action) 
	{
		$this->Class = $Class;
		$this->Action = $Action;
		$this->smarty_construct();
		//var_dump($this->view);
	}

	public function smarty_construct() 
	{
		global $smarty_template_dir,$smarty_compile_dir,$smarty_config_dir,$smarty_cache_dir,$smarty_caching,$smarty_delimiter;
		require_once ('FastEasy/Common/Smarty/Smarty.class.php');
		$smarty=new smarty();
		$smarty->template_dir   = $smarty_template_dir;
		$smarty->compile_dir    = $smarty_compile_dir;
		$smarty->config_dir     = $smarty_config_dir;
		$smarty->cache_dir      = $smarty_cache_dir;
		$smarty->caching        = $smarty_caching;
		$smarty->left_delimiter = $smarty_delimiter[0];
		$smarty->right_delimiter= $smarty_delimiter[1];
		//$smarty->assign("t_dir",$smarty_template_dir);
		$this->view = $smarty;
		$this->view->display("{$this->Class}/{$this->Action}.html");
	}


	// public function db_construct() 
	// {
	// 	require_once ('FastEasy/Common/DataBase/mysql.class.php');
	// 	$db = new action($mydbhost,$mydbuser,$mydbpw,$mydbname,ALL_PS,$mydbcharset);
	// 	$smarty=new smarty();
	// 	$smarty->template_dir   = $smarty_template_dir;
	// 	$smarty->compile_dir    = $smarty_compile_dir;
	// 	$smarty->config_dir     = $smarty_config_dir;
	// 	$smarty->cache_dir      = $smarty_cache_dir;
	// 	$smarty->caching        = $smarty_caching;
	// 	$smarty->left_delimiter = $smarty_delimiter[0];
	// 	$smarty->right_delimiter= $smarty_delimiter[1];
	// 	//$smarty->assign("t_dir",$smarty_template_dir);
	// 	$this->view = $smarty;
	// 	$this->view->display("{$this->Class}/{$this->Action}.html");
	// }


	public function _getSqlAllData($sql)
	{
		$query = $this->query($sql);
		while($back[] = $this->fetch_array($query))
		array_pop($back);
		return $back;
	}




}



?>