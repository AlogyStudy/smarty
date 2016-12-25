<?php

	$title = 'file';
	$content = 'Merry Christmas';

	include('./Tmp.class.php');
	
	$tmp = new Tmp();
	
	$tmp->template_dir = './templates';
	$tmp->compile_dir = './compile';
	
//	echo $tmp->compile('file_tmp.html');

	$tmp->assign('title', $title);
	$tmp->assign('content', $content);
	
	$tmp->display('file_tmp.html');
	
//	include($tmp->compile('file_tmp.html'));

?>