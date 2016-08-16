<?php /* Smarty version Smarty-3.1.3, created on 2016-06-03 23:01:52
         compiled from "templates/default/mobile/module/page_link.php" */ ?>
<?php /*%%SmartyHeaderCode:169442727857519be055f361-07800630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '578a0a1d77bad3b6962b59ff84b499505e096caa' => 
    array (
      0 => 'templates/default/mobile/module/page_link.php',
      1 => 1464345149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169442727857519be055f361-07800630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_sum' => 0,
    'page' => 0,
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57519be05af5f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57519be05af5f')) {function content_57519be05af5f($_smarty_tpl) {?>
<div class="page_link">
	<div class="inner">
		<div class="inner_2">
			<?php if ($_smarty_tpl->tpl_vars['page_sum']->value!=1){?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
">上一页</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
</a><?php }?>
			<a class="on" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
">下一页</a><?php }?>
			<?php }?>
		</div>
	</div>
	<div class="clear"></div>
</div>
<!-- 新秀 --><?php }} ?>