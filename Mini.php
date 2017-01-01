<?php

	class Mini {
		
		protected $left_delimiter = '{';
		protected $right_delimiter = '}'; 
		
		protected $right_length = 1; // 右分隔符的长度
		
		public function __constrcut() {
			$this->right_length = strlen($this->right_delimiter);
		}
		 
		protected $tags = array(); // 装载分析到的标签 
		 
		// 编译
		public function parse( $file ) {
			$cont = file_get_contents('./templates/' . $file);
			
			$offset = 0;
			// 截取第一个字符 '{'
			while ( $poss = strpos($cont, $this->left_delimiter, $offset) !== false ) {
				// 取最后字符 '}'
				$pose = strpos($cont, $this->right_delimiter, $poss);
				
				// 截取标签
				$this->tags[] = substr($cont, $poss, $pose-$poss+$this->right_length);
				
				$offset = $pose + $this->right_length; 
				
			}
			return $this->tags;
		}
	}
	
//	$mini = new Mini();
//	print_r($mini->parse('mini.html'));

?>