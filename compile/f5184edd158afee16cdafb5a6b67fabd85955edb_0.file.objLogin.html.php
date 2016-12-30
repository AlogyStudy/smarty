<?php
/* Smarty version 3.1.30, created on 2016-12-30 13:29:45
  from "E:\wamp\www\github\smarty\templates\objLogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58666149b38a67_44591065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5184edd158afee16cdafb5a6b67fabd85955edb' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\objLogin.html',
      1 => 1483104584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58666149b38a67_44591065 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
		
		注册对象的 变量：
		访问方法{zf->name}. 注意不加`$`,方法后不加`()`
	
	
		<h1>姓名：<?php echo $_smarty_tpl->smarty->registered_objects['zf'][0]->name;?>
</h1>
		<h2>年龄：<?php echo $_smarty_tpl->smarty->registered_objects['zf'][0]->age;?>
</h2>
		<p>SAY：<?php echo $_smarty_tpl->smarty->registered_objects['zf'][0]->say(array(),$_smarty_tpl);?>
</p>
		
	</body>
</html>
<?php }
}
