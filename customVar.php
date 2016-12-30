<?php

	/**
	 * 自定义变了调节器
	 * 
	 * 调节字符颜色
	 * {$title|modcolor: 'red'}
	 */
	 
	/**
	 * 观察官方的变量调节器
	 */
	 
	require('../smarty3/libs/Smarty.class.php');
	require('./MySmarty.class.php');
	
	$smarty = new MySmarty();
	
	$smarty->assign('title', 'xixihaha');
	$smarty->display('customVar.html');	 
	 
?>