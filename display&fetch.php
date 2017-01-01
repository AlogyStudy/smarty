<?php

	require('../smarty3/libs/Smarty.class.php');
	require('./MySmarty.class.php');
	
	if ( file_exists('./html/display&fetch.html') ) {
		header('Location: ./html/display&fetch.html');
		exit;
	}
	
	$smarty = new MySmarty();

	$smarty->assign('title', 'smarty-end');

//	$smarty->display('display&fetch.html');
	$html = $smarty->fetch('display&fetch.html');
	
	file_put_contents('./html/display&fetch.html', $html);
	
	echo $html;

?>