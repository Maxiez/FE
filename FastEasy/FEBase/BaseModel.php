<?php

require_once ('FastEasy/Common/DataBase/mysql.class.php');

abstract class BaseModel  extends mysql
{

	public $db;

	public function __construct() 
	{
		$this->db_construct();
		//var_dump($this->view);
	}

	

	public function db_construct() 
	{
		
		$this->db = new action($mydbhost,$mydbuser,$mydbpw,$mydbname,ALL_PS,$mydbcharset);	
	}







}



?>