<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:35:18
         compiled from "templates/default/index/module/new_article.php" */ ?>
<?php /*%%SmartyHeaderCode:15575027175747dc963d3a18-17728924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a71a146463c84c9bfdaec533fdd86b701c57f0f6' => 
    array (
      0 => 'templates/default/index/module/new_article.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15575027175747dc963d3a18-17728924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_article' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5747dc963ed81',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747dc963ed81')) {function content_5747dc963ed81($_smarty_tpl) {?><div class="box list">
	<div class="head"><span>最新文章</span><a class="more" href="<?php echo url(array('channel'=>'article'),$_smarty_tpl);?>
">更多&gt;&gt;</a></div>
	<div class="main">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<div><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['item']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a></div>
		<?php } ?>
	</div>
</div>
<!-- 新秀 --><?php }} ?>