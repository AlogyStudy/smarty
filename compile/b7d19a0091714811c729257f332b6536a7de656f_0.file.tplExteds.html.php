<?php
/* Smarty version 3.1.30, created on 2016-12-30 13:57:19
  from "E:\wamp\www\github\smarty\templates\tplExteds.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586667bfcc3bc2_97508960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7d19a0091714811c729257f332b6536a7de656f' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\tplExteds.html',
      1 => 1483106212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_586667bfcc3bc2_97508960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4601586667bfc8ea67_24538464', 'title');
?>
</title>
	</head>
	<body>
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13630586667bfca7b27_65281964', 'header');
?>

		<hr />
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16287586667bfcbb209_07118240', 'footer');
?>

		
		
	</body>
</html>
<?php }
/* {block 'title'} */
class Block_4601586667bfc8ea67_24538464 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
父模板标题<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_13630586667bfca7b27_65281964 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_16287586667bfcbb209_07118240 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
