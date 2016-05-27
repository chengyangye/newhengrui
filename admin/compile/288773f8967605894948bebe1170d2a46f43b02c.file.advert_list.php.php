<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 15:22:14
         compiled from "templates/default/admin/module/basic/advert_list.php" */ ?>
<?php /*%%SmartyHeaderCode:68348638757441044c5d680-12017544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '288773f8967605894948bebe1170d2a46f43b02c' => 
    array (
      0 => 'templates/default/admin/module/basic/advert_list.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68348638757441044c5d680-12017544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57441044ccc4c',
  'variables' => 
  array (
    'lang' => 0,
    'advert' => 0,
    'item' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57441044ccc4c')) {function content_57441044ccc4c($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>友情链接</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>名称</td>
				<td width="250px">标签</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advert']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['adv_name'];?>
</td>
				<td>{run module='ad' id='<?php echo $_smarty_tpl->tpl_vars['item']->value['adv_id'];?>
'}</td>
				<td>
					<a onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'advert_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['adv_id']),$_smarty_tpl);?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
]</a>
					<a onClick="del('advert|<?php echo $_smarty_tpl->tpl_vars['item']->value['adv_id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="3">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'advert_add'),$_smarty_tpl);?>
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
		1、系统原有三个广告建议只修改不删除，以免删除后不知道如何添加；<br />
		2、如果您不懂代码，在修改官方默认广告代码时，建议只把代码中间的中文替换成您的广告代码，保留首尾代码；<br />
		3、添加广告后复制标签插入到模板文件中，用户须要会点HTML基础。
	</div>
</div><?php }} ?>