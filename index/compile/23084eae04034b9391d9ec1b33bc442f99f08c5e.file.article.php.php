<?php /* Smarty version Smarty-3.1.3, created on 2016-08-13 08:49:39
         compiled from "templates/default/index\article.php" */ ?>
<?php /*%%SmartyHeaderCode:2453257ae6ea3ea3f38-06452554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23084eae04034b9391d9ec1b33bc442f99f08c5e' => 
    array (
      0 => 'templates/default/index\\article.php',
      1 => 1470988201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2453257ae6ea3ea3f38-06452554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'describe' => 0,
    'version' => 0,
    'page_title' => 0,
    'cat_name' => 0,
    'channel_title' => 0,
    'site_title' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57ae6ea3f3865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ae6ea3f3865')) {function content_57ae6ea3f3865($_smarty_tpl) {?>
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
	<title><?php if ($_smarty_tpl->tpl_vars['page_title']->value){?><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 - <?php }?><?php if ($_smarty_tpl->tpl_vars['cat_name']->value){?><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>

	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/new/index.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/new/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/new/layout.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/new/lrtk.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/swiper3.07.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<?php echo run(array('module'=>'header'),$_smarty_tpl);?>

	<?php echo run(array('module'=>'article_main'),$_smarty_tpl);?>

	<?php echo run(array('module'=>'footer'),$_smarty_tpl);?>

</body>
</html>
<script src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/jquery-1.7.2.min(1).js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/swiper3.07.jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/stepcarousel.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/prefixfree.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/lrtk.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/index.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/share.js"></script>
<?php }} ?>