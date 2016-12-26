<?php

	require('../smarty3/libs/Smarty.class.php');
	require('./MySmarty.class.php');
	
	$smarty = new MySmarty();
	
	/**
	 * 模板中的标签的可以参与运算
	 */
	
	$smarty->assign('age', 20);
	$smarty->assign('diffAge', 7);
	
	$smarty->display('oper.html');
	
?>