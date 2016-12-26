<?php
/* Smarty version 3.1.30, created on 2016-12-26 08:57:47
  from "E:\wamp\www\github\smarty\templates\for.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5860db8b5b4fa3_55486102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40666c0711fd32c5bfe7c4382c1d5a4e76452bf4' => 
    array (
      0 => 'E:\\wamp\\www\\github\\smarty\\templates\\for.html',
      1 => 1482742666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5860db8b5b4fa3_55486102 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
		
		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<?php echo $_smarty_tpl->tpl_vars['i']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['i']->value%3 == 0) {?>
				<br/>
			<?php }?>
		<?php }
}
?>

		
		<hr />
		<h3>1-100所有的奇数</h3>
		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 100+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-(100)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<?php if ($_smarty_tpl->tpl_vars['i']->value%2 != 0) {?>
				<span><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
			<?php }?>
		<?php }
}
?>

			
		<h3>步长属性 控制</h3>	
		<div>
			<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 2;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 100+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-(100)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<?php if ($_smarty_tpl->tpl_vars['i']->first == $_smarty_tpl->tpl_vars['start']->value) {?>
					<span style="color: cyan;"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
				<?php } elseif ($_smarty_tpl->tpl_vars['i']->last == $_smarty_tpl->tpl_vars['i']->total) {?>
					<span style="color: tan;"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
				<?php } else { ?>	
					<?php echo $_smarty_tpl->tpl_vars['i']->value;?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['i']->iteration%3 == 0) {?>
					<br/>
				<?php }?>
			<?php }
}
?>

			<div>
				循环总次数：<?php echo $_smarty_tpl->tpl_vars['i']->total;?>

			</div>
			<div>
				循环索引：$i@iteration
			</div>
			<div>
				循环的第一次：$i@first
			</div>
			<div>
				循环的最后一次：$i@last
			</div>
		</div>	
		
	</body>
</html>
<?php }
}
