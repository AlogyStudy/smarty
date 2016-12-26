<?php
/* Smarty version 3.1.30, created on 2016-12-26 11:41:17
  from "E:\wamp\www\github\smarty\templates\cache.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586101dd8945c3_09081522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39058824b9863bf6ce36dc5936ef1ed7ac63fc0e' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\cache.html',
      1 => 1482752476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_586101dd8945c3_09081522 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\wamp\\www\\github\\smarty3\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\wamp\\www\\github\\smarty3\\libs\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
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

			
		</table>
		
	</body>
</html>
<?php }
}
