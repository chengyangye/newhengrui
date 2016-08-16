<?php /* Smarty version Smarty-3.1.3, created on 2016-08-12 23:04:04
         compiled from "templates/default/index/module/pic_list.php" */ ?>
<?php /*%%SmartyHeaderCode:19005570957ade08ce63678-91021879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aff85eb3608bbeada775d155a091e8cbd1f4804a' => 
    array (
      0 => 'templates/default/index/module/pic_list.php',
      1 => 1471014238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19005570957ade08ce63678-91021879',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57ade08cedd21',
  'variables' => 
  array (
    'show_all_art' => 0,
    'best_art_cat' => 0,
    'cat' => 0,
    'art_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ade08cedd21')) {function content_57ade08cedd21($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['show_all_art']->value!=1){?>
<!--<div class="wrap mt-10"><div class="index_center ">-->
	<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_art_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['last'] = $_smarty_tpl->tpl_vars['cat']->last;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']==6){?>
			<div class="wrap mt-10">
        		<iframe width="999" height="245" frameborder="0" src="http://180.97.2.74:16000/tradeweb/hq/hqV_lb.jsp" scrolling="No" marginwidth="0" marginheight="0"></iframe>
        	</div>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']%6==0){?><div class="wrap mt-10"><div class="index_center "><?php }?>
		<div class="index_list_news l">
			<h2 class="list_news_title"><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['cat']->value['cat_id']),$_smarty_tpl);?>
">更多</a></h2>

			<ul>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_list']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<li><a target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['art_img'];?>
</a></li>
<!--					<li><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_img'];?>
" target="_blank" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
"></a></li>	-->
<!--					<li><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
" target="_blank" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
"></a></li>	-->
				<?php } ?>
			</ul>

		</div>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']%2==1||$_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['last']){?><div class="clear"></div></div></div><?php }?>
	<?php } ?>
<!--<div class="clear"></div></div></div>-->
<?php }?>
<!-- 新秀 -->
<?php }} ?>