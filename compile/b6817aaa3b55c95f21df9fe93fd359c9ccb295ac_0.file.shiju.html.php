<?php
/* Smarty version 3.1.30, created on 2016-12-25 15:14:49
  from "E:\wamp\www\github\smarty\templates\shiju.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585fe269b2c598_84025669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6817aaa3b55c95f21df9fe93fd359c9ccb295ac' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\shiju.html',
      1 => 1482678887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585fe269b2c598_84025669 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
		<h2><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
		<p><?php echo $_smarty_tpl->tpl_vars['poem']->value;?>
</p>
		<p><?php echo $_GET['id'];?>
</p>
		
	</body>
</html>
<?php }
}
