<?php
/* Smarty version 3.1.30, created on 2016-12-30 12:50:02
  from "E:\wamp\www\github\smarty\templates\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586657fa3e6ea5_16541445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e224b8b93879e1501d712b93ef36149684a521b' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\header.html',
      1 => 1483101577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_586657fa3e6ea5_16541445 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="top">
	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<li><a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ul>
</div><?php }
}
