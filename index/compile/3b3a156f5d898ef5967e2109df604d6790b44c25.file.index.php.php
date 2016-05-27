<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:35:14
         compiled from "templates/default/index/index.php" */ ?>
<?php /*%%SmartyHeaderCode:2505273285747dc92676577-64866567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b3a156f5d898ef5967e2109df604d6790b44c25' => 
    array (
      0 => 'templates/default/index/index.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2505273285747dc92676577-64866567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'describe' => 0,
    'version' => 0,
    'site_title' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5747dc926c395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747dc926c395')) {function content_5747dc926c395($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['describe']->value;?>
" />
	<meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" />
	<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/index.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/app.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php echo run(array('module'=>'header'),$_smarty_tpl);?>

	<div id="main">
		<?php echo run(array('module'=>'ad','id'=>'2'),$_smarty_tpl);?>

		<?php echo run(array('module'=>'article_list'),$_smarty_tpl);?>

		<?php echo run(array('module'=>'link'),$_smarty_tpl);?>

	</div>
	<?php echo run(array('module'=>'footer'),$_smarty_tpl);?>

</body>
</html><?php }} ?>