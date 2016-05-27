<?php /* Smarty version Smarty-3.1.3, created on 2016-05-26 11:19:41
         compiled from "templates/default/admin/module/basic/advert_add.php" */ ?>
<?php /*%%SmartyHeaderCode:123686385757466b4d3e77e8-04992502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b9b16440eef0df7f0e50d724598092fc787424b' => 
    array (
      0 => 'templates/default/admin/module/basic/advert_add.php',
      1 => 1464150062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123686385757466b4d3e77e8-04992502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57466b4d42a25',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57466b4d42a25')) {function content_57466b4d42a25($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>添加广告</span></div>
	<div class="main">
		<form id="form_add_advert" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="add_or_edit_advert" />
			<table class="table">
				<tr>
					<td>广告名称：</td>
					<td><input name="adv_name" type="text" class="text" maxlength="40" value="" /></td>
				</tr>
				<tr>
					<td>广告代码：</td>
					<td><textarea class="textarea" name="adv_code"></textarea></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
							<input class="button" type="button" onclick="go_back()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['go_back'];?>
" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div><?php }} ?>