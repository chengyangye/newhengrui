<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:40:14
         compiled from "templates/default/admin/admin.php" */ ?>
<?php /*%%SmartyHeaderCode:1735112150574410337ab125-45863191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b89d1b836a2d7110dcfc69b4a3ea167a069a51a2' => 
    array (
      0 => 'templates/default/admin/admin.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1735112150574410337ab125-45863191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_574410337fa11',
  'variables' => 
  array (
    'version' => 0,
    'site_title' => 0,
    'S_TPL_PATH' => 0,
    'show_main' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574410337fa11')) {function content_574410337fa11($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" />
	<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/admin.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/admin.js"></script>
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['show_main']->value){?>
	<?php echo run(array('module'=>'header'),$_smarty_tpl);?>

	<div id="main">
		<?php echo run(array('module'=>'left'),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ("module/right.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="clear"></div>
	</div>
<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ("module/login.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
</body>
</html><?php }} ?>