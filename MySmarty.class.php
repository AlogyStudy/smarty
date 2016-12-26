<?php

	/**
	 * 使用对象继承的方式来完成smarty的配置
	 * 
	 * 在MySmarty，不能通过重写template_dir, compile_dir属性来实现配置，因为这2个属性父类里是受保护的。可以通过开放的接口。
	 * setTemplateDir(); 和 setCompileDir() 来实现
	 */
	 
	class MySmarty extends Smarty {
		
//		protected $template_dir = './templates'; // 模板文件位置
//		protected $compile_dir = './compile'; // 编译文件位置
//		protected $config_dir = './conf'; // 配置文件位置

		/**
		 * 构造函数
		 */
		public function __construct() {
			// 调用父类的construct， 否则父类的一些设置就丢失了
			parent::__construct();
			
			$this->setTemplateDir('./templates');
			$this->setCompileDir('./compile');
			$this->setConfigDir('./conf');
				 
		}
		
	} 
	
?>