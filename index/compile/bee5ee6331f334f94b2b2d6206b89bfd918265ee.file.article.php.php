<?php /* Smarty version Smarty-3.1.3, created on 2016-06-03 23:01:52
         compiled from "templates/default/mobile/article.php" */ ?>
<?php /*%%SmartyHeaderCode:178531965157519be0485453-35014548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bee5ee6331f334f94b2b2d6206b89bfd918265ee' => 
    array (
      0 => 'templates/default/mobile/article.php',
      1 => 1464345149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178531965157519be0485453-35014548',
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
  'unifunc' => 'content_57519be04e209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57519be04e209')) {function content_57519be04e209($_smarty_tpl) {?>
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
	<title><?php if ($_smarty_tpl->tpl_vars['page_title']->value){?><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 - <?php }?><?php if ($_smarty_tpl->tpl_vars['cat_name']->value){?><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/mobile.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php echo run(array('module'=>'header'),$_smarty_tpl);?>

	<div id="main">
		<?php echo $_smarty_tpl->getSubTemplate ("module/here.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo run(array('module'=>'article_main'),$_smarty_tpl);?>

	</div>
	<?php echo run(array('module'=>'footer'),$_smarty_tpl);?>

</body>
</html><?php }} ?>