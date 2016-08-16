<?php /* Smarty version Smarty-3.1.3, created on 2016-06-03 23:01:44
         compiled from "templates/default/mobile/module/header.php" */ ?>
<?php /*%%SmartyHeaderCode:14970716957519bd86108c9-34152509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6f16bafecb4cf6f7609f0607a81e389c0cc355c' => 
    array (
      0 => 'templates/default/mobile/module/header.php',
      1 => 1464345149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14970716957519bd86108c9-34152509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'S_ROOT' => 0,
    'nav' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57519bd86324a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57519bd86324a')) {function content_57519bd86324a($_smarty_tpl) {?>
<div id="header">
	<div class="top"></div>
	<div class="main">
		<div class="logo"><a href="./"><img src="<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
images/logo.png" /></a></div>
	</div>
</div>
<div id="nav">
	<ul>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['target']==1){?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['men_name'];?>
</a></li>
		<?php } ?>
		<div class="clear"></div>
	</ul>
</div>
<!-- 新秀 -->
<?php }} ?>