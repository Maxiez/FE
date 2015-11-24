<?php

class IndexController extends FEdex_Action
{

	public function indexAction()
	{
		echo "INDEX";

	


		$this->view->assign("string",'11111');

	}
		
	public function testAction(){

		echo 'test';
	}
}



?>