<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:35:18
         compiled from "templates/default/index/article.php" */ ?>
<?php /*%%SmartyHeaderCode:18035092025747dc9611d6c0-32168458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae5b93909506bb0591728287f3c09b944b089d1f' => 
    array (
      0 => 'templates/default/index/article.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18035092025747dc9611d6c0-32168458',
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
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5747dc961876d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747dc961876d')) {function content_5747dc961876d($_smarty_tpl) {?>
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
css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php echo run(array('module'=>'header'),$_smarty_tpl);?>

	<div id="main">
		<?php echo run(array('module'=>'ad','id'=>'2'),$_smarty_tpl);?>

		<div id="left">
			<?php echo $_smarty_tpl->getSubTemplate ("module/here.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php echo run(array('module'=>'article_main'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['global']->value['id']){?><?php echo run(array('module'=>'comment'),$_smarty_tpl);?>
<?php }?>
		</div>
		<div id="right">
			<?php echo run(array('module'=>'new_article'),$_smarty_tpl);?>

			<?php echo run(array('module'=>'best_article'),$_smarty_tpl);?>

		</div>
		<div class="clear"></div>
	</div>
	<?php echo run(array('module'=>'footer'),$_smarty_tpl);?>

</body>
</html><?php }} ?>