<?php /* Smarty version Smarty-3.1.3, created on 2016-05-26 15:29:58
         compiled from "templates/default/admin/module/data/sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:242748785746a5f62f81f5-66178163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cb9e018835ae50874225a2cc79bc3c5fbe0bd5b' => 
    array (
      0 => 'templates/default/admin/module/data/sheet.php',
      1 => 1464150065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242748785746a5f62f81f5-66178163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'cat_list' => 0,
    'item' => 0,
    'article' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5746a5f63913f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746a5f63913f')) {function content_5746a5f63913f($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/sinsiu/upload/smarty/plugins/modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['article_sheet'];?>
</span></div>
	<div class="main">
		<div class="gather_cat_bt">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<a href="<?php echo url(array('channel'=>'data','mod'=>'sheet','cat'=>$_smarty_tpl->tpl_vars['item']->value['server_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['server_name'];?>
</a>&nbsp;&nbsp;
			<?php } ?>
		</div>
		<table class="table sheet">
			<tr class="h">
				<td width="150px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['category'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</td>
				<td width="150px">时间</td>
				<td width="100px">采集</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['cat_name']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['none'];?>
<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['art_add_time'],"%Y-%m-%d %H:%M:%S");?>
</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['is_exist']!=1){?>
					<span id="checkbox_<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
"><input type="checkbox" onClick="do_gather(<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
)" /></span>
					<?php }else{ ?>已采集<?php }?>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="7">
					<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['help'];?>
</span></div>
	<div class="main content">
		1、免费用户每天只能采集5条数据，付费会员每天可采集200条数据；<br />
		2、采集之前先在“采集设置”处设置采集帐号和对应分类。
	</div>
</div>

<script language="javascript">
	function do_gather(id)
	{
		document.getElementById("checkbox_" + id).innerHTML = "采集中";
		ajax("post","?/deal/dir-data/","cmd=do_gather&id=" + id,
		function(data)
		{
			if(data == 1)
			{
				document.getElementById("checkbox_" + id).innerHTML = "已采集";
			}else if(data == 2){
				alert("请先设置分类");
			}else if(data == 3){
				alert("请先设置采集帐号");
			}else if(data == 4){
				alert("采集帐号有误");
			}else if(data == 5){
				alert("普通会员每天只能采集5条数据");
			}else if(data == 6){
				alert("您好，尊贵的银牌会员！您今天已经采集了200条数据。");
			}else if(data == 7){
				alert("同一IP每天只能使用一个帐号，如有疑问，请联系新秀客服");	
			}
		});
	}
</script>
<?php }} ?>