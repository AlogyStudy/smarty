<?php

	require('../smarty3/libs/Smarty.class.php');
	
	$smarty = new Smarty();
	
	$smarty->template_dir = './templates';
	$smarty->compile_dir = './compile';
	$smarty->config_dir = './conf';
	
	
	class Human {
		public $name = 'zf';
		public $age = 23;
		
		public function say() {
			return 'HELLO WORLD';
		}
		
	}
	
	$man = new Human();
	
	$smarty->assign('man', $man);
	
	$smarty->display('assign_object.html');

?>