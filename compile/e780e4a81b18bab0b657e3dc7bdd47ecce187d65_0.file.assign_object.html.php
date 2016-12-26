<?php
/* Smarty version 3.1.30, created on 2016-12-26 04:35:39
  from "E:\wamp\www\github\smarty\templates\assign_object.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58609e1ba33577_97013181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e780e4a81b18bab0b657e3dc7bdd47ecce187d65' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\assign_object.html',
      1 => 1482726938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58609e1ba33577_97013181 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
		<div><?php echo $_smarty_tpl->tpl_vars['man']->value->name;?>
</div>
		<div><?php echo $_smarty_tpl->tpl_vars['man']->value->age;?>
</div>
		<div><?php echo $_smarty_tpl->tpl_vars['man']->value->say();?>
</div>
		
	</body>
</html>
<?php }
}
