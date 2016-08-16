<?php /* Smarty version Smarty-3.1.3, created on 2016-06-03 23:01:52
         compiled from "templates/default/mobile/module/here.php" */ ?>
<?php /*%%SmartyHeaderCode:88576520957519be04ea022-61552259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '735371910e9965011faa1875116357adfa5016fe' => 
    array (
      0 => 'templates/default/mobile/module/here.php',
      1 => 1464345149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88576520957519be04ea022-61552259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cat_name' => 0,
    'channel_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57519be04f679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57519be04f679')) {function content_57519be04f679($_smarty_tpl) {?>
<div class="here">
	<span><?php if ($_smarty_tpl->tpl_vars['cat_name']->value){?><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
<?php }?></span>
</div>
<!-- 新秀 --><?php }} ?>