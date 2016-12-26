<?php

	/**
	 * 模板中的循环
	 * 
	 * for, while
	 * 
	 * foreach, section
	 *
	 * section 功能多，配置选项多。 原理和foreach一样。
	 * 在开发中 使用foreach基本可以满足绝大部分情况. 
	 */
	 
	require('../smarty3/libs/Smarty.class.php');
	require('./MySmarty.class.php');
	
	$smarty = new MySmarty();
	
	
	$smarty->assign('start', 1);
	$smarty->assign('end', 9);
	
	$smarty->display('for.html');
	

?>