<?php

	require('../smarty3/libs/Smarty.class.php');
	require('./MySmarty.class.php');
	
	$smarty = new MySmarty();


	$smarty->display('gradeson.html');

?>