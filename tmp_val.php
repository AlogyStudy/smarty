<?php

	/**
	 * smarty标签变量的来源
	 * 
	 * 在模板中
	 * {$title},则说明$title标签在被assign赋过值。
	 * 
	 * 
	 * smarty的标签变量对应的来源，除了assign,还有那些。
	 * 1. PHP中assign分配变量
	 * 2. smarty的系统保留变量
	 * 3. 从配置文件读取到的配置变量
	 * 
	 */
	 
	// 引入
	require('../smarty3/libs/Smarty.class.php');
	
	// 实例化
	$smarty = new Smarty();
	
	// 配置
	$smarty->template_dir = './templates';
	$smarty->compile_dir = './compile'; 
	
	// assign 赋值
	$smarty->assign('name', '罗隐');
	$smarty->assign('poem', '我未成名君未嫁，可能俱是不如人');
	
	// 系统保留变量，不用赋值，能够自动获取
		
				
	// 编译
	$smarty->display('shiju.html'); 
	
	
?>