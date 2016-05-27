<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:40:22
         compiled from "templates/default/admin/module/left.php" */ ?>
<?php /*%%SmartyHeaderCode:2519030415744103383e447-30239720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ae8296e560b15b2827d294780549a07901b5954' => 
    array (
      0 => 'templates/default/admin/module/left.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2519030415744103383e447-30239720',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5744103384f29',
  'variables' => 
  array (
    'nav_left' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5744103384f29')) {function content_5744103384f29($_smarty_tpl) {?>
<div id="left">
	<ul id="menu">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav_left']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<li><a href="?/<?php echo $_smarty_tpl->tpl_vars['item']->value['men_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['men_name'];?>
</a></li>
		<?php } ?>
	</ul>
</div><?php }} ?>