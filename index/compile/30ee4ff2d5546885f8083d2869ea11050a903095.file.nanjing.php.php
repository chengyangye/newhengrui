<?php /* Smarty version Smarty-3.1.3, created on 2016-08-16 09:49:16
         compiled from "templates/default/index\nanjing.php" */ ?>
<?php /*%%SmartyHeaderCode:1409857b1331922ea11-31984527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ee4ff2d5546885f8083d2869ea11050a903095' => 
    array (
      0 => 'templates/default/index\\nanjing.php',
      1 => 1471258760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1409857b1331922ea11-31984527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57b133195053c',
  'variables' => 
  array (
    'keywords' => 0,
    'describe' => 0,
    'version' => 0,
    'site_title' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b133195053c')) {function content_57b133195053c($_smarty_tpl) {?>
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
css/app.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/swiper3.07.min.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/jquery-1.7.2.min(1).js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/swiper3.07.jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/index.js"></script>
</head>
<body>
	<?php echo run(array('module'=>'header'),$_smarty_tpl);?>


		<?php echo run(array('module'=>'ad','id'=>'2'),$_smarty_tpl);?>

		<?php echo run(array('module'=>'article_list_nanjing'),$_smarty_tpl);?>

		<?php echo run(array('module'=>'link'),$_smarty_tpl);?>


	<?php echo run(array('module'=>'footer'),$_smarty_tpl);?>

</body>
</html>
<?php }} ?>