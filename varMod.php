<?php

	/**
	 * foreach循环
	 * 典型场景，二维数组的循环。
	 * 例如：新闻列表，会员列表，商品列表
	 */	
	
	require('../smarty3/libs/Smarty.class.php');
	require('./MySmarty.class.php');
	
	$smarty = new MySmarty();
	
	
	// 链接数据库
	$conn = mysql_connect('127.0.0.1', 'root', '');
	
	// 设置字符集
	mysql_query('set names utf8', $conn);
	
	// 选择数据库
	mysql_query('use boolshop', $conn);
	
	// 查询数据
	$sql = "select goods_id, goods_name, shop_price, add_time from goods limit 5";
	
	$result = mysql_query($sql, $conn);
	$goods = array();
	while ( $row = mysql_fetch_assoc($result) ) {
		$goods[] = $row;
	}
	
	// 关闭数据库连接
	mysql_close($conn);
	
	// 赋值	
	$smarty->assign('goods', $goods);
	$smarty->assign('m', 'merry');	
	
	$smarty->display('varMod.html');	

?>