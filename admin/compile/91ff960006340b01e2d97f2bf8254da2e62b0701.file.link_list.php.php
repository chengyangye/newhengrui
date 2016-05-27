<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 15:30:54
         compiled from "templates/default/admin/module/service/link_list.php" */ ?>
<?php /*%%SmartyHeaderCode:1507006057574548aaf35432-62900481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91ff960006340b01e2d97f2bf8254da2e62b0701' => 
    array (
      0 => 'templates/default/admin/module/service/link_list.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1507006057574548aaf35432-62900481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_574548ab0ada7',
  'variables' => 
  array (
    'lang' => 0,
    'link' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574548ab0ada7')) {function content_574548ab0ada7($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>友情链接</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>文字</td>
				<td>网址</td>
				<td>图片</td>
				<td>描述</td>
				<td width="45px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_index'];?>
</td>
				<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_top'];?>
</td>
				<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_show'];?>
</td>
				<td width="100px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['lin_word'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['lin_url'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['lin_img']!='none'){?><img class="lin_img" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_img'];?>
" width="88px" height="31px" /><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['lin_img'];?>
<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['lin_title'];?>
</td>
				<td onClick="show_edit('index_<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_id'];?>
')">
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_id'];?>
_1"><?php echo $_smarty_tpl->tpl_vars['item']->value['lin_index'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/pencil.gif" /></span>
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_id'];?>
_2" style="display:none;">
						<input type="text" id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_index'];?>
" style="width:30px;" onBlur="set_order('index','link',<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_id'];?>
,this.value)" />
					</span>
				</td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['lin_top']==1){?>checked<?php }?> onClick="set_order('top','link',<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_id'];?>
,this.checked)" /></td>
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['lin_lock']){?>-<?php }else{ ?><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['lin_show']==1){?>checked<?php }?> onClick="set_order('show','link',<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_id'];?>
,this.checked)" /><?php }?></td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['lin_lock']){?>
					<span class="red">[赞助商链接]</span>
					<?php }else{ ?>
					<a onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'link_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['lin_id']),$_smarty_tpl);?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
]</a>
					<a onClick="del('link|<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
					<?php }?>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="8">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'link_add'),$_smarty_tpl);?>
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
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['help'];?>
</span></div>
	<div class="main content">
		1、我方建议保留赞助商链接，因此此处不提供赞助商链接删除功能，若非要删除赞助商链接，请到数据库中删除。
	</div>
</div><?php }} ?>