<?php /* Smarty version Smarty-3.1.3, created on 2016-08-15 11:17:47
         compiled from "templates/default/index\module\page_link.php" */ ?>
<?php /*%%SmartyHeaderCode:2037757b1345b5f5294-21948132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2842ea9d4e7d892313819f15e27665c4d444cd6' => 
    array (
      0 => 'templates/default/index\\module\\page_link.php',
      1 => 1470987683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2037757b1345b5f5294-21948132',
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
  'unifunc' => 'content_57b1345b77016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b1345b77016')) {function content_57b1345b77016($_smarty_tpl) {?>
<div class="page">
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['page_sum']->value!=1){?>
		<li><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>1),$_smarty_tpl);?>
">首页</a></li>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><li><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
">上一页</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-4>0){?><li><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-4),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-4;?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-3>0){?><li><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-3),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-3;?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-2>0){?><li><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-2),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-2;?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><li><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
</a></li><?php }?>
		<li><a class="on" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><li><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+2<=$_smarty_tpl->tpl_vars['page_sum']->value){?><li><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+2),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+3<=$_smarty_tpl->tpl_vars['page_sum']->value){?><li><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+3),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+4<=$_smarty_tpl->tpl_vars['page_sum']->value){?><li><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+4),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><li><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
">下一页</a></li><?php }?>
		<li><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page_sum']->value),$_smarty_tpl);?>
">末页</a></li>
		<?php }?>
	</ul>
</div>
<?php }} ?>