<?php

class IndexController extends FEdex_Action
{

	public function indexAction()
	{
		echo "INDEX";

		var_dump($this->view);

		// $this->view->display("Index/index.html");
		// $this->view->assign("t_dir",'11111');

	}
		
	public function testAction(){

		echo 'test';
	}
}



?>