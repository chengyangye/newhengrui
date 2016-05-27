<?php /* Smarty version Smarty-3.1.3, created on 2016-05-25 14:28:42
         compiled from "templates/default/admin/module/basic/nav_add.php" */ ?>
<?php /*%%SmartyHeaderCode:8974713735745461ab30bf3-97218760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a84d21069ea27cac17a3c19e89484b69adf620eb' => 
    array (
      0 => 'templates/default/admin/module/basic/nav_add.php',
      1 => 1464150063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8974713735745461ab30bf3-97218760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type_name' => 0,
    'global' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5745461ab85a1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5745461ab85a1')) {function content_5745461ab85a1($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>添加<?php echo $_smarty_tpl->tpl_vars['type_name']->value;?>
</span></div>
	<div class="main">
		<form id="form_add_nav" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="add_nav" />
			<input name="type" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['global']->value['type'];?>
" />
			<table class="table">
				<tr>
					<td>文字：</td>
					<td><input name="word" type="text" class="text" maxlength="50" /></td>
				</tr>
				<tr>
					<td>链接：</td>
					<td><input name="link" type="text" class="text" maxlength="150" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
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