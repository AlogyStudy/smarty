<?php

	/**
	 * 调节颜色
	 * @param {String} $string Smarty自动传递给进来，待调节的变量
	 * @param {String} $color 参数值
	 */
	function smarty_modifier_modcolor( $string, $color ) {
		return '<font color="' . $color . '">' . $string . '</font>';
	}
	
	
	
?>