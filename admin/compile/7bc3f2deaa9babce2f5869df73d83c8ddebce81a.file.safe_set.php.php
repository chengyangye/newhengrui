<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 15:22:08
         compiled from "templates/default/admin/module/basic/safe_set.php" */ ?>
<?php /*%%SmartyHeaderCode:21308707565744103712bb26-31740777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bc3f2deaa9babce2f5869df73d83c8ddebce81a' => 
    array (
      0 => 'templates/default/admin/module/basic/safe_set.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21308707565744103712bb26-31740777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5744103717886',
  'variables' => 
  array (
    'safe_admin_login_hours' => 0,
    'safe_admin_login_times' => 0,
    'safe_message_hours' => 0,
    'safe_message_times' => 0,
    'safe_comment_hours' => 0,
    'safe_comment_times' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5744103717886')) {function content_5744103717886($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>安全设置</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">后台登录设置：</td>
				<td>
					<input type="text" class="text2" onBlur="set_varia('safe_admin_login_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_admin_login_hours']->value;?>
" />
					小时内同一IP只能登录后台
					<input type="text" class="text2" onBlur="set_varia('safe_admin_login_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_admin_login_times']->value;?>
" />
					次
				</td>
			</tr>
			<tr>
				<td>前台留言设置：</td>
				<td>
					<input type="text" class="text2" onBlur="set_varia('safe_message_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_message_hours']->value;?>
" />
					小时内同一IP只能提交留言
					<input type="text" class="text2" onBlur="set_varia('safe_message_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_message_times']->value;?>
" />
					次
				</td>
			</tr>
			<tr>
				<td>前台评论设置：</td>
				<td>
					<input type="text" class="text2" onBlur="set_varia('safe_comment_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_comment_hours']->value;?>
" />
					小时内同一IP只能提交评论
					<input type="text" class="text2" onBlur="set_varia('safe_comment_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_comment_times']->value;?>
" />
					次
				</td>
			</tr>
		</table>
	</div>
</div>
<?php }} ?>