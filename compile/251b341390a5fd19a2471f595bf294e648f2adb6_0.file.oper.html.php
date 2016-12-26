<?php
/* Smarty version 3.1.30, created on 2016-12-26 06:11:12
  from "E:\wamp\www\github\smarty\templates\oper.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860b480daf7b2_53145726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '251b341390a5fd19a2471f595bf294e648f2adb6' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\oper.html',
      1 => 1482732671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5860b480daf7b2_53145726 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
		<div><?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</div>
		<!-- 标签可以参与运算，但是不推荐 -->
		<div><?php echo $_smarty_tpl->tpl_vars['age']->value+2;?>
</div>
		<div><?php echo 2+$_smarty_tpl->tpl_vars['age']->value;?>
</div>
		
		<div>年纪差为：<?php echo $_smarty_tpl->tpl_vars['age']->value-$_smarty_tpl->tpl_vars['diffAge']->value;?>
</div>
		
	</body>
</html>
<?php }
}
