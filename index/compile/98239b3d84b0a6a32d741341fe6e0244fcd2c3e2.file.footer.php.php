<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:35:14
         compiled from "templates/default/index/module/footer.php" */ ?>
<?php /*%%SmartyHeaderCode:14480176805747dc927988e3-83294774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98239b3d84b0a6a32d741341fe6e0244fcd2c3e2' => 
    array (
      0 => 'templates/default/index/module/footer.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14480176805747dc927988e3-83294774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footer_nav' => 0,
    'item' => 0,
    'site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5747dc927c925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747dc927c925')) {function content_5747dc927c925($_smarty_tpl) {?>
<div id="footer">
	<div class="nav">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footer_nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['footer_nav']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['men_name'];?>
</a>
		<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['footer_nav']['last']){?>|<?php }?>
		<?php } ?>
	</div>
	<div class="info">
		<!--
		<?php echo $_smarty_tpl->getSubTemplate ("module/copyright.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['record_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['site']->value['record'];?>
</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['tech_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['site']->value['tech'];?>
</a>
		<?php echo $_smarty_tpl->tpl_vars['site']->value['statistical_code'];?>

		-->
		<div>免责声明：本网站所刊登、转载的各种图片、稿件是为传播更多的信息，本网不承担此类稿件侵权行为的连带责任。</div>
<!--		<div class="clear"></div>	-->
		<div>郑重提醒：投资有风险 入市需谨慎</div>
<!--		<div class="clear"></div>	-->
		<div> 本站为<strong>恒瑞文金</strong>下属2351号经济会员,提供<strong>南京文交所</strong>网上开户,<strong>南京文交所钱币藏品交易中心</strong>银商绑定,<strong>南京文化产权交易所</strong>交易软件操作指导 </div>
	</div>
</div>
<!-- 新秀 --><?php }} ?>