<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:35:18
         compiled from "templates/default/index/module/best_article.php" */ ?>
<?php /*%%SmartyHeaderCode:16412278875747dc963f18b4-73505546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcf6c20b7f23b8b8d1e69fd2e556ca260b11c2e7' => 
    array (
      0 => 'templates/default/index/module/best_article.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16412278875747dc963f18b4-73505546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_article' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5747dc9640c6a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747dc9640c6a')) {function content_5747dc9640c6a($_smarty_tpl) {?><div class="box list">
	<div class="head"><span>推荐文章</span><a class="more" href="<?php echo url(array('channel'=>'article','best'=>'1'),$_smarty_tpl);?>
">更多&gt;&gt;</a></div>
	<div class="main">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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