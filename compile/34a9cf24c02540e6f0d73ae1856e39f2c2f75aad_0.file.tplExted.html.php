<?php
/* Smarty version 3.1.30, created on 2016-12-30 13:57:19
  from "E:\wamp\www\github\smarty\templates\tplExted.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586667bfc59679_78023032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34a9cf24c02540e6f0d73ae1856e39f2c2f75aad' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\tplExted.html',
      1 => 1483106119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tplExteds.html' => 1,
  ),
),false)) {
function content_586667bfc59679_78023032 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19442586667bfc38d61_36433484', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16963586667bfc503f4_66139428', "header");
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:tplExteds.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_19442586667bfc38d61_36433484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
嘻嘻哈哈<?php
}
}
/* {/block "title"} */
/* {block "header"} */
class Block_16963586667bfc503f4_66139428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
头部<?php
}
}
/* {/block "header"} */
}
