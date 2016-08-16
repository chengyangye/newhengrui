<?php /* Smarty version Smarty-3.1.3, created on 2016-06-03 23:01:44
         compiled from "templates/default/mobile/module/article_list.php" */ ?>
<?php /*%%SmartyHeaderCode:161555104857519bd865a5b5-81980715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19068cffcbdd35deff96bf494ab29327d0360e07' => 
    array (
      0 => 'templates/default/mobile/module/article_list.php',
      1 => 1464345149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161555104857519bd865a5b5-81980715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_all_art' => 0,
    'best_art_cat' => 0,
    'cat' => 0,
    'art_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57519bd869f9e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57519bd869f9e')) {function content_57519bd869f9e($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['show_all_art']->value!=1){?>
	<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_art_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['last'] = $_smarty_tpl->tpl_vars['cat']->last;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']%3==0){?><div><?php }?>
		<div class="box list">
			<div class="head">
				<span><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</span>
				<a class="more" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['cat']->value['cat_id']),$_smarty_tpl);?>
">更多&gt;&gt;</a>
			</div>
			<div class="main">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_list']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<div><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a></div>
				<?php } ?>
			</div>
		</div>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']%3==2||$_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['last']){?><div class="clear"></div></div><?php }?>
	<?php } ?>
<?php }?>
<!-- 新秀 --><?php }} ?>