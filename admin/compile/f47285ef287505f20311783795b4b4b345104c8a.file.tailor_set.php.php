<?php /* Smarty version Smarty-3.1.3, created on 2016-05-26 15:29:34
         compiled from "templates/default/admin/module/data/tailor_set.php" */ ?>
<?php /*%%SmartyHeaderCode:10780008685746a5de6b3e61-65876463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f47285ef287505f20311783795b4b4b345104c8a' => 
    array (
      0 => 'templates/default/admin/module/data/tailor_set.php',
      1 => 1464150069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10780008685746a5de6b3e61-65876463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'lang' => 0,
    'cat_setting' => 0,
    'setting' => 0,
    'server_id' => 0,
    'channel' => 0,
    'item' => 0,
    'cat_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5746a5de78c16',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746a5de78c16')) {function content_5746a5de78c16($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>免费试用</span></div>
	<div class="main">
		<form id="form_free_trial" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<table class="table">
				<tr>
					<td>我想采集这个网站：</td>
					<td><input name="trial_site" type="text" class="text" />&nbsp;&nbsp;如：http://www.163.com/</td>
				</tr>
				<tr>
					<td>我想采集这些类别：</td>
					<td><input name="trial_cats" type="text" class="text" />&nbsp;&nbsp;如：娱乐、新闻、军事，请以顿号或逗号隔开</td>
				</tr>
				<tr>
					<td>采集好了通知我：</td>
					<td><input name="trial_email" type="text" class="text" />&nbsp;&nbsp;这里填邮箱</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="button" onclick="submit_free_trial()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
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
	<div class="head"><span>免费试用说明</span></div>
	<div class="main content">
		1、信息提交后，新秀官方需要1-3小时的时间处理您的请求，您需要耐心等待；<br />
		2、采集结果会在后台“私有数据”里显示，并会发送邮件通知您，如果您的请求难以实现，新秀也会通过邮件通知您；<br />
		3、请填写以文章为主的网站，新秀目前不提供图片站、视频站的免费采集试用服务，银牌以上会员才可享有这类服务。
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>私有数据分类设置</span></div>
	<div class="main">
		<form id="form_edit_tailor_cat" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_tailor_cat" />
			<table class="table sheet">
				<tr class="h">
					<td width="30%">服务器分类</td>
					<td>对应本地频道</td>
					<td>对应本地分类</td>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
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
					<td><span class="red" onClick="del('varia|<?php echo $_smarty_tpl->tpl_vars['setting']->value['varia_id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</span></td>
				</tr>
				<?php } ?>
				<tr>
					<td colspan="4">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
							<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'tailor_cat_add'),$_smarty_tpl);?>
')" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
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
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['help'];?>
</span></div>
	<div class="main content">
		1、免费试用功能仅适用于免费用户，银牌会员请联系新秀客服进行设置，以便我方为您提供更准确的采集服务；<br />
		2、免费试用功能有限，银牌会员可以获得更多更方便的服务，例如：每天自动采集自动入库、指定类别而不指定网站；<br />
		3、使用本功能可以采集任意类型的数据，你可以任意指定目标采集网站或者数据类别，每天采集数量不限；<br />
		4、“服务器分类ID”和“服务器分类名称”两项，请在成为新秀银牌会员之后联系新秀客服设置。
	</div>
</div>

<script language="javascript">
	function submit_free_trial()
	{
		var obj = document.getElementById("form_free_trial");
		var trial_site = obj.trial_site.value;
		var trial_cats = obj.trial_cats.value;
		var trial_email = obj.trial_email.value;
		if(trial_site != '' && trial_cats != '' && trial_email != '')
		{
			ajax("post","?/deal/dir-data/","cmd=free_trial&trial_site=" + trial_site + "&trial_cats=" + trial_cats  + "&trial_email=" + trial_email,
			function(data)
			{
				if(data == 1)
				{
					alert("提交成功，请等待新秀为您采集");
				}else if(data == "in_trial"){
					alert("您已经提交了免费试用申请，请不要重复提交");
				}else{
					alert(data);
				}
			});
		}else{
			alert("采集信息不能为空");
		}
	}
</script>
<?php }} ?>