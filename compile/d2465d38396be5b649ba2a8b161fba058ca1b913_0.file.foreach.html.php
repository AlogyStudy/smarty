<?php
/* Smarty version 3.1.30, created on 2016-12-26 10:42:39
  from "E:\wamp\www\github\smarty\templates\foreach.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860f41fe5bbc9_11816838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2465d38396be5b649ba2a8b161fba058ca1b913' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\foreach.html',
      1 => 1482748959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5860f41fe5bbc9_11816838 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
		<h2>商品栏目</h2>
		<table border="1">
			<tr>
				<td>序号</td>
				<td>栏目名</td>
				<td>栏目信息</td>
			</tr>
			
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'g', true, 'k');
$_smarty_tpl->tpl_vars['g']->iteration = 0;
$_smarty_tpl->tpl_vars['g']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->iteration++;
$_smarty_tpl->tpl_vars['g']->index++;
$_smarty_tpl->tpl_vars['g']->first = !$_smarty_tpl->tpl_vars['g']->index;
$_smarty_tpl->tpl_vars['g']->last = $_smarty_tpl->tpl_vars['g']->iteration == $_smarty_tpl->tpl_vars['g']->total;
$__foreach_g_0_saved = $_smarty_tpl->tpl_vars['g'];
?>
			<tr <?php if ($_smarty_tpl->tpl_vars['g']->iteration%2 == 0) {?> bgcolor="burlywood" <?php }?> <?php if ($_smarty_tpl->tpl_vars['g']->first == 1) {?> bgcolor="gray" <?php }?>>
				<td><?php echo $_smarty_tpl->tpl_vars['g']->iteration;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['g']->value['cat_name'];?>
</td>	
				<td><?php echo $_smarty_tpl->tpl_vars['g']->value['intro'];?>
</td>
			</tr>
			<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</table>
		
		<div>索引：$g@iteration</div>
		<div>首行：$g@first</div>
		<div>尾行：$g@last</div>
		<div>总条数：<?php echo $_smarty_tpl->tpl_vars['g']->total;?>
</div>
		
	</body>
</html>
<?php }
}
