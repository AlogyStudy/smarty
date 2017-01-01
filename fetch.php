<?php

	// fetch 如何知道本页输出内容
	if ( file_exists('./html/fetch.html') ) {
		header('location: ./html/fetch.html');
		exit;
	}
	
	// 启动缓冲区
	ob_start();

	// 数据	
	echo 1 , '  ';
	echo 2 , '  ';
	echo 4 , '  ';
	
	// 读取缓冲区
	$html = ob_get_contents();
	// 清除缓冲区
	ob_clean();	
	
	// 写入文件
	file_put_contents('./html/fetch.html', $html);
	
	// 输出
	echo $html;
	
?>
