<?php /* Smarty version Smarty-3.1.3, created on 2016-05-25 12:58:09
         compiled from "templates/default/admin/module/editor.php" */ ?>
<?php /*%%SmartyHeaderCode:398538060574410483a0ce7-66373797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1c5e549af0be300c5d1521c6da192b23b0d57c0' => 
    array (
      0 => 'templates/default/admin/module/editor.php',
      1 => 1464149996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '398538060574410483a0ce7-66373797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_574410483ba6d',
  'variables' => 
  array (
    'editor_text' => 0,
    'S_ROOT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574410483ba6d')) {function content_574410483ba6d($_smarty_tpl) {?>
<script type="text/javascript" src="http://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<textarea rows="30" cols="50" name="editor"><?php echo $_smarty_tpl->tpl_vars['editor_text']->value;?>
</textarea>
<script type="text/javascript">
	CKEDITOR.replace('editor',
	{
		filebrowserBrowseUrl :  '<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl :  '<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl :  '<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
ckfinder/ckfinder.html?Type=Flash',
		filebrowserUploadUrl :  '<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl  :  '<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl  :  '<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>
<!-- 新秀 -->
<?php }} ?>