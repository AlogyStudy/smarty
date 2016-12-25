<?php

	// 引入smarty
	require('../smarty3/libs/Smarty.class.php');

	// 实例化
	$smarty = new Smarty();
	
	// 配置
	$smarty->template_dir	= './templates';
	$smarty->compile_dir = './compile';
	
	
	$user = array(
		'name' => '刘备',
		'age' => 28,
		'weapon' => '双剑'
	);	
	
	// 赋值
	$smarty->assign($user);
	
	$zf = array(
		'name' => '张飞',
		'age' => 25,
		'weapon' => '矛'
	);	
	$smarty->assign('zf', $zf);
	
	$guanyu = array('关羽', 25, '青龙');
	$smarty->assign('guanyu', $guanyu);
	
	// 编译
	$smarty->display('liubei.html');
	
?>