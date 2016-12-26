<?php
/* Smarty version 3.1.30, created on 2016-12-26 06:39:12
  from "E:\wamp\www\github\smarty\templates\if.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860bb10810b73_44408954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d6f5371f8bfd1b9ce3f7a26c307d48c06a399a1' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\if.html',
      1 => 1482734347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5860bb10810b73_44408954 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
		<div><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</div>
		
		<?php if ($_smarty_tpl->tpl_vars['price']->value < 10000) {?>
			<div><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</div>
		<?php } else { ?>
			<div>TAN</div>
		<?php }?>
		
		<?php if ($_GET['today'] == 0 || $_GET['today'] == 7) {?> 
		<div>周日</div>
		<?php } elseif ($_GET['today'] == 6) {?>
		<div>周六</div>
		<?php } else { ?>
		<div>工作日</div>
		<?php }?>
		
	</body>
</html><?php }
}
