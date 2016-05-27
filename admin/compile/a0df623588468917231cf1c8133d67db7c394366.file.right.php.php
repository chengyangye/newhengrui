<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:40:22
         compiled from "templates/default/admin/module/right.php" */ ?>
<?php /*%%SmartyHeaderCode:208059900157441033851879-48998510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0df623588468917231cf1c8133d67db7c394366' => 
    array (
      0 => 'templates/default/admin/module/right.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208059900157441033851879-48998510',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_574410338818e',
  'variables' => 
  array (
    'show_info' => 0,
    'check_power' => 0,
    'global' => 0,
    'info_text' => 0,
    'link_href' => 0,
    'link_text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574410338818e')) {function content_574410338818e($_smarty_tpl) {?>
<div id="right">
<?php if (!$_smarty_tpl->tpl_vars['show_info']->value&&$_smarty_tpl->tpl_vars['check_power']->value){?>
	<div id="core">
		<?php echo $_smarty_tpl->getSubTemplate ((((('module/').($_smarty_tpl->tpl_vars['global']->value['original'])).('/')).($_smarty_tpl->tpl_vars['global']->value['mod'])).('.php'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
<?php }else{ ?>
	<div class="block">
		<div class="head"><span>系统信息</span></div>
		<div class="main">
			<div id="info">
				<?php if ($_smarty_tpl->tpl_vars['check_power']->value){?>
				<div class="main">
					<div class="txt"><?php echo $_smarty_tpl->tpl_vars['info_text']->value;?>
</div>
					<div class="link"><a href="<?php echo $_smarty_tpl->tpl_vars['link_href']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>
</a></div>
				</div>
				<script language="javascript">
					interval = setInterval("document.location.href = '<?php echo $_smarty_tpl->tpl_vars['link_href']->value;?>
'",3000);
				</script>
				<?php }else{ ?>
				<div class="main">
					<div class="txt">对不起，您的权限不足，无法操作当前页面</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
<?php }?>
</div><?php }} ?>