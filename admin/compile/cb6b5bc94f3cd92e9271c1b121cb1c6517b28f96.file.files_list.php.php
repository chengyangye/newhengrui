<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 15:32:52
         compiled from "templates/default/admin/module/file/files_list.php" */ ?>
<?php /*%%SmartyHeaderCode:9320602285747f824a3ff95-85057667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb6b5bc94f3cd92e9271c1b121cb1c6517b28f96' => 
    array (
      0 => 'templates/default/admin/module/file/files_list.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9320602285747f824a3ff95-85057667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'list' => 0,
    'host' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5747f824aad23',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747f824aad23')) {function content_5747f824aad23($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_file'];?>
</span></div>
	<div class="main">
		<form id="form_upl_file" method="post" enctype="multipart/form-data" action="<?php echo url(array('channel'=>'deal','dir'=>'file'),$_smarty_tpl);?>
" target="deal">
			<input name="cmd" type="hidden" value="upload" />
			<input name="dir" type="hidden" value="resource/" />
			<input name="file" type="hidden" value="" />
			<input name="file_path" type="file" onChange="do_upload('form_upl_file',0)" />
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>下载资源</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>资源地址</td>
				<td width="120px">数据库相关</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td>http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/resource/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['id']){?>ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php }else{ ?><span class="red">无关</span><?php }?>
				</td>
				<td>
					<?php if (!$_smarty_tpl->tpl_vars['item']->value['id']){?><a onClick="del_file('resource/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['none'];?>
<?php }?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
<iframe class="deal" name="deal"></iframe><?php }} ?>