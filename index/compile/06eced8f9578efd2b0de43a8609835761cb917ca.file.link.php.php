<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:35:14
         compiled from "templates/default/index/module/link.php" */ ?>
<?php /*%%SmartyHeaderCode:314672435747dc9275d535-50010596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06eced8f9578efd2b0de43a8609835761cb917ca' => 
    array (
      0 => 'templates/default/index/module/link.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314672435747dc9275d535-50010596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'img_link' => 0,
    'item' => 0,
    'word_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5747dc927900e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747dc927900e')) {function content_5747dc927900e($_smarty_tpl) {?>
<div class="box" id="link">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['link'];?>
</span></div>
	<div class="main">
		<?php if ($_smarty_tpl->tpl_vars['img_link']->value){?>
		<div class="img">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['img_link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_title'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_img'];?>
" /></a>
		<?php } ?>
		<div class="clear"></div>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['word_link']->value){?>
		<div class="word">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['word_link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['lin_word'];?>
</a>
		<?php } ?>
		</div>
		<?php }?>
	</div>
</div>
<!-- 新秀 -->
<?php }} ?>