<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 15:22:26
         compiled from "templates/default/admin/module/basic/show_set.php" */ ?>
<?php /*%%SmartyHeaderCode:49215685657441035493e28-23893214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11d904261e8d6d3b65b084459a183758ac0b8def' => 
    array (
      0 => 'templates/default/admin/module/basic/show_set.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49215685657441035493e28-23893214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_574410354fc62',
  'variables' => 
  array (
    'show' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574410354fc62')) {function content_574410354fc62($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>模块启闭</span></div>
	<div class="main">
		<table class="table">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['show']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['show']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['show']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['show']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['show']['index']%2==0){?><tr><?php }?>
			<td width="15%"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
：</td>
			<td width="35%">
			<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
-1" <?php echo $_smarty_tpl->tpl_vars['item']->value['yes'];?>
 onclick="edit_show(this.id)" />开启
			<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
-0" <?php echo $_smarty_tpl->tpl_vars['item']->value['no'];?>
 onclick="edit_show(this.id)" /><?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</td>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['show']['index']%2==1){?>
			</tr>
			<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['show']['last']){?>
			<td width="15%">&nbsp;</td>
			<td width="35%">&nbsp;</td>
			</tr>
			<?php }?>
			<?php } ?>
		</table>
	</div>
</div>

<script language="javascript">
	function edit_show(id)
	{
		ajax("post","?/deal/dir-basic/","cmd=edit_show&id="+id,
		function(data)
		{
			if(data == 1) result();
		});
	}
</script>
<?php }} ?>