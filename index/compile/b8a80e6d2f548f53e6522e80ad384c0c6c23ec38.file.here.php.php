<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:35:18
         compiled from "templates/default/index/module/here.php" */ ?>
<?php /*%%SmartyHeaderCode:14015858175747dc96191579-05949727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8a80e6d2f548f53e6522e80ad384c0c6c23ec38' => 
    array (
      0 => 'templates/default/index/module/here.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14015858175747dc96191579-05949727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cat_name' => 0,
    'channel_title' => 0,
    'lang' => 0,
    'global' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5747dc961c7cf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747dc961c7cf')) {function content_5747dc961c7cf($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/opt/lampp/htdocs/upload/smarty/plugins/modifier.truncate.php';
?>
<div class="here">
	<span><?php if ($_smarty_tpl->tpl_vars['cat_name']->value){?><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
<?php }?></span>
	<div class="link">
		<a href="./"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['channel_title']->value){?>-&gt;<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['cat_name']->value){?>-&gt;<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['global']->value['cat']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page_title']->value){?>-&gt;<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['global']->value['id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,20);?>
</a><?php }?>
	</div>
</div>
<!-- 新秀 --><?php }} ?>