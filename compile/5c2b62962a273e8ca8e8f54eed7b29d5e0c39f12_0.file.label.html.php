<?php
/* Smarty version 3.1.30, created on 2016-12-25 09:31:03
  from "E:\wamp\www\github\smarty\templates\label.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585f91d7a84e60_64173507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c2b62962a273e8ca8e8f54eed7b29d5e0c39f12' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\label.html',
      1 => 1482658249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585f91d7a84e60_64173507 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
	
		<table style="border: 1px solid lightcyan;">
			<tr>
				<td>姓名：</td>
				<td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
			</tr>
			<tr>
				<td>年龄</td>
				<td><?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</td>
			</tr>
			<tr>
				<td>兵器</td>
				<td><?php echo $_smarty_tpl->tpl_vars['weapon']->value;?>
</td>
			</tr>
		</table>
		
		
	</body>
</html>
<?php }
}
