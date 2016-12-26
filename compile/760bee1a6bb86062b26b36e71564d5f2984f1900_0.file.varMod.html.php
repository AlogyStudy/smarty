<?php
/* Smarty version 3.1.30, created on 2016-12-26 11:32:02
  from "E:\wamp\www\github\smarty\templates\varMod.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860ffb2daafd6_34896612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '760bee1a6bb86062b26b36e71564d5f2984f1900' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\varMod.html',
      1 => 1482751921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5860ffb2daafd6_34896612 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\wamp\\www\\github\\smarty3\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\wamp\\www\\github\\smarty3\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) require_once 'E:\\wamp\\www\\github\\smarty3\\libs\\plugins\\modifier.capitalize.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
		<h2>变量调节器</h2>
		
		<table border="1" cellspacing="" cellpadding="">
			<tr>
				<td>序号</td>
				<td>商品名</td>
				<td>商品价格</td>
				<td>发布时间</td>
			</tr>
			
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'g', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['g']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
</td>
				<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['g']->value['goods_name'],15,'...');?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['g']->value['shop_price'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['g']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
</td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			
			<div><?php echo mb_strtoupper(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['m']->value), 'UTF-8');?>
</div>
			
		</table>
		
	</body>
</html>
<?php }
}
