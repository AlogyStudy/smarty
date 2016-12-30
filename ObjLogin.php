<?php
	require('../smarty3/libs/Smarty.class.php');
	require('./MySmarty.class.php');
	
	$smarty = new MySmarty();

	class User {
		public $name = 'zf';
		public $age = 23;
		
		public function say() {
			return 'hello:' . $this->name;	
		}
		
		public function modPass() {
			return '修改密码成功';
		}
		
	}
	
	$zf = new User();
	
//	$smarty->assign('zf', $zf);

	// 对象注册
	$smarty->registerObject('zf', $zf, array('say')); // 第三个参数可以控制允许调用的方法.
	
	$smarty->display('objLogin.html');

?>