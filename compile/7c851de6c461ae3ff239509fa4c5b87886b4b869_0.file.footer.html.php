<?php
/* Smarty version 3.1.30, created on 2016-12-30 13:06:35
  from "E:\wamp\www\github\smarty\templates\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58665bdb4d3f00_94884287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c851de6c461ae3ff239509fa4c5b87886b4b869' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\footer.html',
      1 => 1483103086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58665bdb4d3f00_94884287 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="footer">
	页面底部
	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ul>
</div>


	</body>
</html>
<?php }
}
