<?php

	require('../smarty3/libs/Smarty.class.php');
	require('./MySmarty.class.php');
	
	$smarty = new MySmarty();
	
	$nav_top = array('首页', '商城', '男装');
	$nav_footer = array('友情链接', '备案');
	
//	$smarty->assign('nav', $nav_top);
//	$smarty->assign('nav', $nav_footer);
	
	/**
	 * smarty3引入一种新的概念，叫做数据对象。
	 * 数据对象，就是一个装数据用的框。
	 * 
	 * 靠2个数据对象，把2个数据对象里，各赋值一个同名的`nav`,2个`nav`对象互不干扰
	 */
	 
	 
	// 创建一个数据对象
	$hdata = $smarty->createData();
	$fdata = $smarty->createData();

	// 使用数据对象
	$hdata->assign('nav', $nav_top);
	$fdata->assign('nav', $nav_footer);	
	
	// display时，要声明，这次使用，哪个数据对象。
	$smarty->display('header.html', $hdata);
	$smarty->display('dataObj.html');
	$smarty->display('footer.html', $fdata);
	
?>
