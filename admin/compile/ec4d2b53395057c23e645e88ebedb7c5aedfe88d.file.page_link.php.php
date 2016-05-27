<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 15:30:39
         compiled from "templates/default/admin/module/page_link.php" */ ?>
<?php /*%%SmartyHeaderCode:54016610957441045e61e65-67296288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec4d2b53395057c23e645e88ebedb7c5aedfe88d' => 
    array (
      0 => 'templates/default/admin/module/page_link.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54016610957441045e61e65-67296288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57441045f2399',
  'variables' => 
  array (
    'page_sum' => 0,
    'page' => 0,
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57441045f2399')) {function content_57441045f2399($_smarty_tpl) {?>
<div class="page_link">
	<div class="in">
		<span>共<?php echo $_smarty_tpl->tpl_vars['page_sum']->value;?>
页</span>
		<span>第<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
页</span>
		<?php if ($_smarty_tpl->tpl_vars['page_sum']->value!=1){?>
		<a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>1),$_smarty_tpl);?>
">首页</a>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
">上一页</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-4>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-4),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value-4;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-3>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-3),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value-3;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-2>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-2),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value-2;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
]</a><?php }?>
		<a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
" style="color:#C00;font-weight:bold;">[<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
]</a>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+2<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+2),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+3<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+3),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+4<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+4),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
">下一页</a><?php }?>
		<a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page_sum']->value),$_smarty_tpl);?>
">末页</a>
		<?php }?>
		<form id="form_jump" action="" method="get">
			<input type="hidden" name="url" value="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
" />
			<input class="text" type="text" style="width:30px" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
			<input class="button" type="button" onclick="page_jump('<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
')" value="跳转"/>
		</form>
	</div>
</div>
<!-- 新秀 --><?php }} ?>