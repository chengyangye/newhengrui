<?php /* Smarty version Smarty-3.1.3, created on 2016-08-13 08:49:40
         compiled from "templates/default/index\module\prev_next.php" */ ?>
<?php /*%%SmartyHeaderCode:2776257ae6ea4151d35-57135407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4df4143ec7e7fe9e3f7e84545f884dcb30188b4f' => 
    array (
      0 => 'templates/default/index\\module\\prev_next.php',
      1 => 1470987457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2776257ae6ea4151d35-57135407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prev_title' => 0,
    'prefix' => 0,
    'prev_id' => 0,
    'lang' => 0,
    'next_title' => 0,
    'next_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57ae6ea41849b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ae6ea41849b')) {function content_57ae6ea41849b($_smarty_tpl) {?>
<div class="fenye">
<ul>
    <li>上一篇：<?php if ($_smarty_tpl->tpl_vars['prev_title']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'id'=>$_smarty_tpl->tpl_vars['prev_id']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['prev_title']->value;?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['none'];?>
<?php }?> </li>
    <li>下一篇：<?php if ($_smarty_tpl->tpl_vars['next_title']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'id'=>$_smarty_tpl->tpl_vars['next_id']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['next_title']->value;?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['none'];?>
<?php }?> </li>
</ul>
</div><?php }} ?>