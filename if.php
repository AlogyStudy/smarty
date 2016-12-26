<?php

	require('../smarty3/libs/Smarty.class.php');
	require('./MySmarty.class.php');
	
	$smarty = new MySmarty();

	$smarty->assign('price', 9999);
	
	$smarty->assign(array('color' => 'pink', 'color1' => 'tan'));
		
	$smarty->display('./if.html');	

?>
