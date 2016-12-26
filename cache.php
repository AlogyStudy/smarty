<?php
	
	require('../smarty3/libs/Smarty.class.php');
	require('./MySmarty.class.php');
	
	$smarty = new MySmarty();
	
	/**
	 *
	 * 把请求的数据保存下来
	 *  
	 * smarty缓存的用法
	 */
	
	// 开启缓存 
	$smarty->caching = true;
	
	// 设置缓存生命周期
	$smarty->cache_lifetime = 10;
	
	// 缓存的文件目录，用户存储缓存文件
	$smarty->cache_dir = './cache';
	 	
if ( !$smarty->isCached('cache.html') ) { // 判断文件是否缓存

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
	
	echo '走了数据库';
}	
	
	$time = time();
	$smarty->assign('time', $time);
	$smarty->assign('time2', $time, true); // 第三个参数是 nocache，为true,说明不缓存
	
	function insert_welcome( $parm ) {
		return 'WELCOME HELLO' . ', AGE:' . $parm['age']; 
	}
	
	$smarty->display('cache.html');	

?>