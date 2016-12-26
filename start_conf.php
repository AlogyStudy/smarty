<?php

	require('../smarty3/libs/Smarty.class.php');
	require('./MySmarty.class.php');
	
	$smarty = new MySmarty();

	$data = array(
		'title' => 'pink',
		'content' => 'xixihaha'
	);
	
	$smarty->assign($data);
	
	$smarty->display('./temp01.html');

?>