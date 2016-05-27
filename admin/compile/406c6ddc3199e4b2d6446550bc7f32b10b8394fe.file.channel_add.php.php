<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 15:24:18
         compiled from "templates/default/admin/module/super/channel_add.php" */ ?>
<?php /*%%SmartyHeaderCode:732048574530d62dc594-66231585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406c6ddc3199e4b2d6446550bc7f32b10b8394fe' => 
    array (
      0 => 'templates/default/admin/module/super/channel_add.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '732048574530d62dc594-66231585',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_574530d63a022',
  'variables' => 
  array (
    'global' => 0,
    'original' => 0,
    'item' => 0,
    'lang' => 0,
    'channel' => 0,
    'S_LANG' => 0,
    'path' => 0,
    'S_ROOT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574530d63a022')) {function content_574530d63a022($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>新建频道</span></div>
	<div class="main">
		<form id="form_add_channel" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="add_channel" />
			<table class="table">
				<tr>
					<td colspan="2">请选择您所要创建的类似频道：</td>
				</tr>
				<tr>
					<td colspan="2">
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['original']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<input name="original" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cha_code'];?>
" checked="checked" /><?php echo $_smarty_tpl->tpl_vars['item']->value['cha_name'];?>
 &nbsp;&nbsp;
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td width="100px">新频道代号：</td>
					<td><input name="cha_code" type="text" class="text" maxlength="50" />&nbsp;例如：cases</td>
				</tr>
				<tr>
					<td>新频道名称：</td>
					<td><input name="cha_name" type="text" class="text" maxlength="50" />&nbsp;例如：成功案例</td>
				</tr>
				<tr>
					<td>关键词替换：</td>
					<td>
						<input name="word_1" type="text" class="text2" maxlength="10" />&nbsp;&nbsp;替换为&nbsp;&nbsp;
						<input name="word_2" type="text" class="text2" maxlength="10" />&nbsp;例如将“文章”替换为“案例”
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
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
	<div class="head"><span>已新建频道</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>频道代号</td>
				<td>频道名称</td>
				<td width="220px">语言包</td>
				<td>类似频道</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['cha_code'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['cha_name'];?>
</td>
				<td>
					<?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable((((('languages%2F').($_smarty_tpl->tpl_vars['S_LANG']->value)).('%2Fadmin%2F')).($_smarty_tpl->tpl_vars['item']->value['cha_code'])).('.txt'), null, 0);?>
					<a href="<?php echo url(array('channel'=>'file','mod'=>'lang_edit','path'=>$_smarty_tpl->tpl_vars['path']->value),$_smarty_tpl);?>
">admin/<?php echo $_smarty_tpl->tpl_vars['item']->value['cha_code'];?>
.txt</a><br />
					<?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable((((('languages%2F').($_smarty_tpl->tpl_vars['S_LANG']->value)).('%2Findex%2F')).($_smarty_tpl->tpl_vars['item']->value['cha_code'])).('.txt'), null, 0);?>
					<a href="<?php echo url(array('channel'=>'file','mod'=>'lang_edit','path'=>$_smarty_tpl->tpl_vars['path']->value),$_smarty_tpl);?>
">index/<?php echo $_smarty_tpl->tpl_vars['item']->value['cha_code'];?>
.txt</a>
				</td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['item']->value['original']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['original'];?>
</a></td>
				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['item']->value['cha_code']),$_smarty_tpl);?>
" target="_blank">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['view'];?>
]</a>
					<a onClick="del_channel(<?php echo $_smarty_tpl->tpl_vars['item']->value['cha_id'];?>
)">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['help'];?>
</span></div>
	<div class="main content">
		1、不能使用PHP保留字作为“新频道代号”，否则可能导致出错;<br />
		2、如果您使用了伪静态功能，创建新频道后，请在“静态设置”处重新开启伪静态。
	</div>
</div>

<script language="javascript">
	function del_channel(val)
	{
		if(confirm("您确定要删除该帐号吗？"))
		{
			ajax("post","?/deal/dir-super/","cmd=del_channel&id=" + val,
			function(data)
			{
				if(data == 1) document.location.replace(document.location.href);
			});
		}
	}
</script>
<?php }} ?>