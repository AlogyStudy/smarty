<?php
/* Smarty version 3.1.30, created on 2016-12-25 09:30:25
  from "E:\wamp\www\github\smarty\templates\liubei.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585f91b10728d9_91699498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a30d5737e2320e45a3d94e98bad541155ffd5550' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\liubei.html',
      1 => 1482657128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585f91b10728d9_91699498 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			
			table {
				background: pink;
				margin: 10px; 
			}
			
		</style>
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
		
		<table style="border: 1px solid lightcyan;">
			<tr>
				<td>姓名：</td>
				<td><?php echo $_smarty_tpl->tpl_vars['zf']->value['name'];?>
</td>
			</tr>
			<tr>
				<td>年龄</td>
				<td><?php echo $_smarty_tpl->tpl_vars['zf']->value['age'];?>
</td>
			</tr>
			<tr>
				<td>兵器</td>
				<td><?php echo $_smarty_tpl->tpl_vars['zf']->value['weapon'];?>
</td>
			</tr>
		</table>

		<table style="border: 1px solid lightcyan;">
			<tr>
				<td>姓名：</td>
				<td><?php echo $_smarty_tpl->tpl_vars['guanyu']->value[0];?>
</td>
			</tr>
			<tr>
				<td>年龄</td>
				<td><?php echo $_smarty_tpl->tpl_vars['guanyu']->value[1];?>
</td>
			</tr>
			<tr>
				<td>兵器</td>
				<td><?php echo $_smarty_tpl->tpl_vars['guanyu']->value[2];?>
</td>
			</tr>
		</table>
		
	</body>
</html>
<?php }
}
