<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 15:24:45
         compiled from "templates/default/admin/module/super/nav_list.php" */ ?>
<?php /*%%SmartyHeaderCode:16571759095746a5abbf9061-27576318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c55ac84c6cb05333efc489550c6cd29e9a6567f' => 
    array (
      0 => 'templates/default/admin/module/super/nav_list.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16571759095746a5abbf9061-27576318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5746a5abcaa12',
  'variables' => 
  array (
    'nav' => 0,
    'cat' => 0,
    'global' => 0,
    'lang' => 0,
    'list' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746a5abcaa12')) {function content_5746a5abcaa12($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['nav']['last'] = $_smarty_tpl->tpl_vars['cat']->last;
?>
<div class="block">
	<div class="head"><span>导航管理 - <?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</span></div>
	<div class="main">
		<form id="form_edit_nav_<?php echo $_smarty_tpl->tpl_vars['cat']->value['type'];?>
" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_nav" />
			<table class="table sheet">
				<tr class="h">
					<td>文字</td>
					<td>链接</td>
					<td width="45px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_index'];?>
</td>
					<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_top'];?>
</td>
					<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_show'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['cat']->value['type']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr>
					<td><input name="word[]" type="text" class="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_name'];?>
" /></td>
					<td><input name="link[]" type="text" class="text" maxlength="150" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_url'];?>
" /></td>
					<td onClick="show_edit('index_<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
')">
						<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
_1"><?php echo $_smarty_tpl->tpl_vars['item']->value['men_index'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/pencil.gif" /></span>
						<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
_2" style="display:none;">
							<input type="text" id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_index'];?>
" style="width:30px;" onBlur="set_order('index','menu',<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
,this.value)" />
						</span>
					</td>
					<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['men_top']==1){?>checked<?php }?> onClick="set_order('top','menu',<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
,this.checked)" /></td>
					<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['men_show']==1){?>checked<?php }?> onClick="set_order('show','menu',<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
,this.checked)" /></td>
					<td><input name="id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
" /><span class="red" onClick="del('menu|<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</span></td>
				</tr>
				<?php } ?>
				<tr>
					<td colspan="6">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
							<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'nav_add','type'=>$_smarty_tpl->tpl_vars['cat']->value['type']),$_smarty_tpl);?>
')" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['nav']['last']){?><div class="space"></div><?php }?>
<?php } ?>
<?php }} ?>