<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:35:18
         compiled from "templates/default/index/module/prev_next.php" */ ?>
<?php /*%%SmartyHeaderCode:19742430015747dc962317b2-84633497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '187f6b82a63b2037a6cbc75dc005ecb4c4aab372' => 
    array (
      0 => 'templates/default/index/module/prev_next.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19742430015747dc962317b2-84633497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'prev_title' => 0,
    'prefix' => 0,
    'prev_id' => 0,
    'next_title' => 0,
    'next_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5747dc9625882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747dc9625882')) {function content_5747dc9625882($_smarty_tpl) {?>
<div id="prev_next">
	<div class="prev"><?php echo $_smarty_tpl->tpl_vars['lang']->value['prev'];?>
：<?php if ($_smarty_tpl->tpl_vars['prev_title']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'id'=>$_smarty_tpl->tpl_vars['prev_id']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['prev_title']->value;?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['none'];?>
<?php }?></div>
	<div class="next"><?php echo $_smarty_tpl->tpl_vars['lang']->value['next'];?>
：<?php if ($_smarty_tpl->tpl_vars['next_title']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'id'=>$_smarty_tpl->tpl_vars['next_id']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['next_title']->value;?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['none'];?>
<?php }?></div>
	<div class="clear"></div>
</div><?php }} ?>