<?php /* Smarty version Smarty-3.1.3, created on 2016-08-13 08:47:17
         compiled from "templates/default/index\module\link.php" */ ?>
<?php /*%%SmartyHeaderCode:390057ae6e15c2e889-95904982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08c97e3213e88c2e8708656a00f6ecfdfb6ca177' => 
    array (
      0 => 'templates/default/index\\module\\link.php',
      1 => 1470903269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '390057ae6e15c2e889-95904982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_link' => 0,
    'item' => 0,
    'word_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57ae6e15c6539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ae6e15c6539')) {function content_57ae6e15c6539($_smarty_tpl) {?>
<div class="flink">
  <div class="link">
    <div class="friend">友情链接：</div>
    <ul>
    	<?php if ($_smarty_tpl->tpl_vars['img_link']->value){?>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['img_link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_img'];?>
" /></a> </li>
			<?php } ?>
			<div class="clear"></div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['word_link']->value){?>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['word_link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_title'];?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['lin_word'];?>
</a> </li>
			<?php } ?>
		<?php }?>
    </ul>
  </div>

</div>
<!-- 新秀 -->
<?php }} ?>