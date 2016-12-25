<?php

	/**
	 * 原理:
	 * 分析html模板中的标签，生成相应的PHP文件
	 * 再引入该PHP
	 * 
	 * smarty流程：
	 * 1. 引入smarty
	 * 2. 实例化
	 * 3. 配置[最基本的要配置模板目录和编译目录]
	 */
	 
	// 引入smarty
	require('../smarty3/libs/Smarty.class.php');

	// 实例化
	$smarty = new Smarty();
	
	// 配置
	$smarty->template_dir	= './templates';
	$smarty->compile_dir = './compile';
	
	$title = 'T';
	$content = 'C';
	
	// 赋值
	$smarty->assign('title', $title);
	$smarty->assign('content', $content);
	
	// 编译
	$smarty->display('temp01.html');
	
?>
