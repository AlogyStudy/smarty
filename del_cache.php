<?php

	/**
	 * 强制删除缓存
	 */

	require('../smarty3/libs/Smarty.class.php');
	require('./MySmarty.class.php');
	
	$smarty = new MySmarty();
	
	$goods_id = $_GET['goods_id'] + 0;
	
	// 参数模板名，和缓存ID
	$smarty->clearCache('one_page.html', $goods_id);
	
	echo '删除缓存成功';

?>