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

	
	/**
	 * 单模板多缓存
	 * 
	 * 典型场景：为商品模板设置缓存，当时从url接收的goods_id
	 * 当缓存后，所有商品都一样了，不合适。
	 * 
	 * 能否为同一个模板，生成不同的缓存文件呢?
	 * 比如：根据ID的不同，来生成各个商品的缓存页面。
	 * 使用单模版多缓存。
	 * 原理：生成缓存的时候，可以再传一个缓存ID。
	 * 如果ID不同，则生成缓存文件不同。
	 * 
	 */
	 	
	$goods_id = $_GET['goods_id'] + 0;
		
if ( !$smarty->isCached('one_page.html', $goods_id) ) {
			
	// 链接数据库
	$conn = mysql_connect('127.0.0.1', 'root', '');
	
	// 设置字符集
	mysql_query('set names utf8', $conn);
	
	// 选择数据库
	mysql_query('use boolshop', $conn);
	
	// 查询数据
	$sql = "select goods_name, shop_price, goods_desc from goods where goods_id=" . $goods_id;
	
	
	$result = mysql_query($sql, $conn);
	$goods = mysql_fetch_assoc($result);
	
	// 关闭数据库连接
	mysql_close($conn);
	
	// 赋值	
	$smarty->assign($goods);
	
}	

	// 编译	
	$smarty->display('one_page.html', $goods_id);	

?>