<?php

	/**
	 * 小型模板类
	 */
	 
	/**
	 * 1. 把标签解析成PHP输出语句
	 * 2. 模板文件-->PHP文件
	 * 		区分 模板文件和 PHP文件，把模板和编译后的结果，放置在不同的目录中.
	 * 		用2个不同的属性来记录 不同的目录	
	 */
	  
	class Tmp {
		public $template_dir = ''; // 模版文件所在的路径
		public $compile_dir = ''; // 模板编译后存在的路径

		public $tpl_var = array(); // 接受外部的变量
		
		/**
		 * 存储全局变量
		 * @param {String} $key 变量名
		 * @param {Mixin} $val 变量值 
		 */
		public function assign( $key, $val ) {
			$this->tpl_var[$key] = $val;
		}
		
		/**
		 * 调用 compile模板，和自动引入
		 * @param {String} $template 模板文件名
		 */
		public function display( $template ) {
			$comp = $this->compile($template);
			include($comp);
		}
				
		/**
		 * 编译
		 * @param {String} $template 模板文件名 (需要编译的模板文件的文件名)
		 * @return {String} $comp 编译后的文件路径 
		 * 
		 * 把指定的模板内容读取，再编译成PHP文件
		 * 
		 * 最终外部执行的是，编译后的文件
		 */
		public function compile( $template ) {
			
			// 读取模板内容
			$tmp = $this->template_dir . '/' . $template;
			$scoure = file_get_contents($tmp);	

			// 把编译后的内容保存成编译后的文件
			$comp = $this->compile_dir . '/'. $template . '.php';
			
			// 判断模板是否已经存在， 加上通过 文件修改的时间来判断，模板是否已经被修改过
			if ( file_exists($comp) && filemtime($tmp) < filemtime($comp) ) {
				return $comp;
			}
			
			// 替换模板内容
			$scoure = str_replace('{$', '<?php echo $this->tpl_var[\'', $scoure);
			$scoure = str_replace('}', '\'];?>', $scoure);
			
			file_put_contents($comp, $scoure);
						
			return $comp;				
		}
		
	}
?>