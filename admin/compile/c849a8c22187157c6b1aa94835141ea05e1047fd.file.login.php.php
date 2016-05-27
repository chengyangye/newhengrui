<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:40:14
         compiled from "templates/default/admin/module/login.php" */ ?>
<?php /*%%SmartyHeaderCode:13613835735744eef3de73a2-07235853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c849a8c22187157c6b1aa94835141ea05e1047fd' => 
    array (
      0 => 'templates/default/admin/module/login.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13613835735744eef3de73a2-07235853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5744eef3e2379',
  'variables' => 
  array (
    'site_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5744eef3e2379')) {function content_5744eef3e2379($_smarty_tpl) {?>
<div id="login">
	<form method="post" action="<?php echo url(array('channel'=>'info'),$_smarty_tpl);?>
">
		<input name="cmd" type="hidden" value="admin_login" />
		<table cellspacing="1" cellpadding="0">
			<tr>
				<td class="c title" colspan="2"><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
登录</td>
			</tr>
			<tr>
				<td class="l">用户名：</td>
				<td class="r"><input class="text" name="username" type="text" /></td>
			</tr>
			<tr>
				<td class="l">密码：</td>
				<td class="r"><input class="text" name="password" type="password" /></td>
			</tr>
			<tr>
				<td class="c bt_row" colspan="2"><input class="button" type="submit" value="登录" /></td>
			</tr>
		</table>
	</form>
</div><?php }} ?>