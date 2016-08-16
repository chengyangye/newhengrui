<?php /* Smarty version Smarty-3.1.3, created on 2016-08-15 14:12:04
         compiled from "templates/default/index\module\pic_list.php" */ ?>
<?php /*%%SmartyHeaderCode:1566357ae6e15ba9b65-42104272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c62e93c93238281269fbc9b6ba3b656b11bf62' => 
    array (
      0 => 'templates/default/index\\module\\pic_list.php',
      1 => 1471241523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1566357ae6e15ba9b65-42104272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57ae6e15bf7d7',
  'variables' => 
  array (
    'show_all_art' => 0,
    'best_art_cat' => 0,
    'cat' => 0,
    'art_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ae6e15bf7d7')) {function content_57ae6e15bf7d7($_smarty_tpl) {?>

<div class="prod">
	<?php if ($_smarty_tpl->tpl_vars['show_all_art']->value!=1){?>
	<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_art_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
	<div class="product">
		<div class="prp">
			<div class="pro"><big><a target="_blank" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['cat']->value['cat_id']),$_smarty_tpl);?>
">交易品种</a></big></div>
			<div class="more1"><a target="_blank" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['cat']->value['cat_id']),$_smarty_tpl);?>
" class="more">+MORE</a></div>
		</div>
		<div class="stepcarousel" id="mygallery">
			<div id="displaycssbelt" class="belt" style="width: 2290px; left: -229px; visibility: visible;">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_list']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<div class="panel" style="float: none; position: absolute; left: 0px;">
					<div class="subfeature"><a target="_blank" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
"><img width="174" height="170" class="post-image" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_img'];?>
"></a>
						<div class="subfeature-txt">
							<h2><a target="_blank" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a></h2>
						</div>
					</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php }?>
</div>
<?php }} ?>