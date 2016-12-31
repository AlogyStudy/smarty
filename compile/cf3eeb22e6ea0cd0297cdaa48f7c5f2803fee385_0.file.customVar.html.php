<?php
/* Smarty version 3.1.30, created on 2016-12-30 14:20:59
  from "E:\wamp\www\github\smarty\templates\customVar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58666d4b61c149_50521212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf3eeb22e6ea0cd0297cdaa48f7c5f2803fee385' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\customVar.html',
      1 => 1483107657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58666d4b61c149_50521212 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_modcolor')) require_once 'E:\\wamp\\www\\github\\smarty3\\libs\\plugins\\modifier.modcolor.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
		<div><?php echo smarty_modifier_modcolor($_smarty_tpl->tpl_vars['title']->value,'tan');?>
</div>
		
		
	</body>
</html>
<?php }
}
