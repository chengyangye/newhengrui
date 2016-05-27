<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:35:18
         compiled from "templates/default/index/module/page_link.php" */ ?>
<?php /*%%SmartyHeaderCode:2179191485747dc96315dc2-52907324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d4bde9eafebff3a3c6100527afb2160081e1a80' => 
    array (
      0 => 'templates/default/index/module/page_link.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2179191485747dc96315dc2-52907324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_sum' => 0,
    'prefix' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5747dc963c658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747dc963c658')) {function content_5747dc963c658($_smarty_tpl) {?>
<div class="page_link">
	<div class="inner">
		<div class="inner_2">
			<?php if ($_smarty_tpl->tpl_vars['page_sum']->value!=1){?>
			<a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>1),$_smarty_tpl);?>
">首页</a>
			<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
">上一页</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value-4>0){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-4),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-4;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value-3>0){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-3),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-3;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value-2>0){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-2),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-2;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
</a><?php }?>
			<a class="on" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value+2<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+2),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value+3<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+3),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value+4<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+4),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
">下一页</a><?php }?>
			<a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page_sum']->value),$_smarty_tpl);?>
">末页</a>
			<?php }?>
		</div>
	</div>
	<div class="clear"></div>
</div>
<!-- 新秀 --><?php }} ?>