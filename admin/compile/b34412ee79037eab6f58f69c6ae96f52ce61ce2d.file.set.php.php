<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 15:31:09
         compiled from "templates/default/admin/module/data/set.php" */ ?>
<?php /*%%SmartyHeaderCode:957918482574530d4d46504-55798601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b34412ee79037eab6f58f69c6ae96f52ce61ce2d' => 
    array (
      0 => 'templates/default/admin/module/data/set.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '957918482574530d4d46504-55798601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_574530d4e09b3',
  'variables' => 
  array (
    'global' => 0,
    'data_username' => 0,
    'data_password' => 0,
    'lang' => 0,
    'cat_setting' => 0,
    'setting' => 0,
    'server_id' => 0,
    'channel' => 0,
    'item' => 0,
    'cat_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574530d4e09b3')) {function content_574530d4e09b3($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>帐号信息</span></div>
	<div class="main">
		<form id="form_edit_data_user" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_data_user" />
			<table class="table">
				<tr>
					<td colspan="2">注意：这里填写的是新秀采集帐号，而不是本网站后台管理员帐号。如果您还没有采集帐号，<a href="http://data.sinsiu.com/?/user/mod-register/index.html" target="_blank">请点击这里注册</a></td>
				</tr>
				<tr>
					<td width="30%">用户名：</td>
					<td>
						<input name="data_username" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['data_username']->value;?>
" />
					</td>
				</tr>
				<tr>
					<td width="30%">密码：</td>
					<td>
						<input name="data_password" type="password" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['data_password']->value;?>
" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>公共数据分类设置</span></div>
	<div class="main">
		<form id="form_edit_data_cat" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_data_cat" />
			<table class="table sheet">
				<tr class="h">
					<td width="30%">官方分类</td>
					<td>对应本地频道</td>
					<td>对应本地分类</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['setting'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setting']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_setting']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['setting']->key => $_smarty_tpl->tpl_vars['setting']->value){
$_smarty_tpl->tpl_vars['setting']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['server_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['setting']->value['server_id'], null, 0);?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['setting']->value['server_name'];?>
</td>
					<td>
						<input name="varia_id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['setting']->value['varia_id'];?>
" />
						<select name="data_channel[]" onchange="get_channel_cat(this.value,'tag_<?php echo $_smarty_tpl->tpl_vars['server_id']->value;?>
')">
							<option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['please_select'];?>
</option>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cha_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['cha_id']==$_smarty_tpl->tpl_vars['setting']->value['channel_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['cha_name'];?>
</option>
							<?php } ?>
						</select>
					</td>
					<td>
						<div id="tag_<?php echo $_smarty_tpl->tpl_vars['server_id']->value;?>
">
						<select name="data_cat[]">
							<option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['please_select'];?>
</option>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value[$_smarty_tpl->tpl_vars['server_id']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['cat_id']==$_smarty_tpl->tpl_vars['setting']->value['cat_id']){?>selected="selected"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value['grade']-1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>&nbsp;<?php endfor; endif; ?><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</option>
							<?php } ?>
						</select>
						</div>
					</td>
				</tr>
				<?php } ?>
				<tr>
					<td colspan="3">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<!--
<div class="space"></div>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['help'];?>
</span></div>
	<div class="main content">
		
	</div>
</div>
--><?php }} ?>