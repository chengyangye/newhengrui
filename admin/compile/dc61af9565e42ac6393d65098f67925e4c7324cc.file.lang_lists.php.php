<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 15:33:06
         compiled from "templates/default/admin/module/file/lang_lists.php" */ ?>
<?php /*%%SmartyHeaderCode:439899755747f8325bd465-15974303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc61af9565e42ac6393d65098f67925e4c7324cc' => 
    array (
      0 => 'templates/default/admin/module/file/lang_lists.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '439899755747f8325bd465-15974303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'lang_list' => 0,
    'item' => 0,
    'global' => 0,
    'pack' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5747f83264a23',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747f83264a23')) {function content_5747f83264a23($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>语言列表</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>中文名</td>
				<td>外语名</td>
				<td>语言包</td>
				<td>前台入口</td>
				<td>后台入口</td>
				<td width="150px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lang_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['chinese_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['foreign_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['pack_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['index_entrance'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['admin_entrance'];?>
</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['index_entrance']!='index.php'){?>
					<a onClick="del_lang('<?php echo $_smarty_tpl->tpl_vars['item']->value['var_id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
					<?php }else{ ?>
					<span class="red">[系统保护]</span>
					<?php }?>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="6">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'lang_add'),$_smarty_tpl);?>
')" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>语言包</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>名称</td>
				<td width="150px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pack']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td>
					<a href="<?php echo url(array('channel'=>'file','mod'=>'lang_list','name'=>$_smarty_tpl->tpl_vars['item']->value['name']),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>

<script language="javascript">
	function del_lang(val)
	{
		if(confirm("您确定要删除该语言吗？"))
		{
			ajax("post","?/deal/dir-file/","cmd=del_lang&id=" + val,
			function(data)
			{
				if(data == 1) document.location.replace(document.location.href);
			});
		}
	}
</script>
<?php }} ?>