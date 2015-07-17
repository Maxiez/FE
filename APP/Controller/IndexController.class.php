<?php


function indexAction($smarty){
	echo "INDEX";

	$smarty->display("Index/index.html");
	//$smarty->assign("t_dir",$smarty_template_dir );

}
	
function testAction(){

	echo 'test';
}

?>