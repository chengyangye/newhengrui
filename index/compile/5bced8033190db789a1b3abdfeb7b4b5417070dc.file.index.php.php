<?php /* Smarty version Smarty-3.1.3, created on 2016-06-03 23:01:44
         compiled from "templates/default/mobile/index.php" */ ?>
<?php /*%%SmartyHeaderCode:170592329257519bd85c27d6-31432861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bced8033190db789a1b3abdfeb7b4b5417070dc' => 
    array (
      0 => 'templates/default/mobile/index.php',
      1 => 1464345149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170592329257519bd85c27d6-31432861',
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
  'unifunc' => 'content_57519bd8608e7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57519bd8608e7')) {function content_57519bd8608e7($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['describe']->value;?>
" />
	<meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" />
	<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/mobile.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php echo run(array('module'=>'header'),$_smarty_tpl);?>

	<div id="main">
		<?php echo run(array('module'=>'article_list'),$_smarty_tpl);?>

	</div>
	<?php echo run(array('module'=>'footer'),$_smarty_tpl);?>

</body>
</html><?php }} ?>