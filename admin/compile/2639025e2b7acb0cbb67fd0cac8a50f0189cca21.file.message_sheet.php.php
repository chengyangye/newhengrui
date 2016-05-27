<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 15:30:45
         compiled from "templates/default/admin/module/service/message_sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:1118284148574530d82cae01-73583543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2639025e2b7acb0cbb67fd0cac8a50f0189cca21' => 
    array (
      0 => 'templates/default/admin/module/service/message_sheet.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1118284148574530d82cae01-73583543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_574530d835a9d',
  'variables' => 
  array (
    'lang' => 0,
    'message' => 0,
    'item' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574530d835a9d')) {function content_574530d835a9d($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/upload/smarty/plugins/modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span>留言列表</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>留言内容</td>
				<td width="80px">通过审核</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td style="text-align:left;line-height:22px;">
					<div>
						【<?php echo $_smarty_tpl->tpl_vars['item']->value['mes_type'];?>
】&nbsp;
						<b><?php echo $_smarty_tpl->tpl_vars['item']->value['mes_username'];?>
：</b><span><?php echo $_smarty_tpl->tpl_vars['item']->value['mes_title'];?>
</span>
						&nbsp;[<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['mes_add_time'],"%Y-%m-%d %H:%M:%S");?>
]
					</div>
					<div><?php echo $_smarty_tpl->tpl_vars['item']->value['mes_text'];?>
</div>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['mes_reply']!=''){?>
					<div><span class="red">管理员回复：</span><?php echo $_smarty_tpl->tpl_vars['item']->value['mes_reply'];?>
</div>
					<?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['mes_show']!=2){?>
					<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['mes_show']==1){?>checked<?php }?> onClick="set_order('show','message',<?php echo $_smarty_tpl->tpl_vars['item']->value['mes_id'];?>
,this.checked)" />
					<?php }else{ ?>悄悄话<?php }?>
				</td>
				<td>
					<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'message_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['mes_id']),$_smarty_tpl);?>
">[回复]</a>
					<a onClick="del('message|<?php echo $_smarty_tpl->tpl_vars['item']->value['mes_id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="3">
					<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable(($_smarty_tpl->tpl_vars['global']->value['channel']).('/mod-message_sheet'), null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div>
<?php }} ?>