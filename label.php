<?php

	// 引入
	require('../smarty3/libs/Smarty.class.php');
	
	// 实例化
	$smarty = new Smarty();
	
	// 配置
	$smarty->template_dir = './templates';
	$smarty->compile_dir = './compile';	
	
	// 配置smarty的左右定界符
//	$smarty->left_delimiter = '{{';
//	$smarty->right_delimiter = '}}';          
	
	$user = array(
		'name' => '刘备',
		'age' => 28,
		'weapon' => '双剑'
	);	
	
	// 赋值
	$smarty->assign($user);

	// 编译
	$smarty->display('label.html');
	
?>