<?php /* Smarty version Smarty-3.1.3, created on 2016-06-03 17:18:50
         compiled from "templates/default/index/module/cat_list.php" */ ?>
<?php /*%%SmartyHeaderCode:19580307205751491e4ddb14-97729927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18fb88b4f349ca2521c2dc37a6c50e82a3998398' => 
    array (
      0 => 'templates/default/index/module/cat_list.php',
      1 => 1464945525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19580307205751491e4ddb14-97729927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5751491e4fbc1',
  'variables' => 
  array (
    'cat_name' => 0,
    'cat_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5751491e4fbc1')) {function content_5751491e4fbc1($_smarty_tpl) {?><div class="sub_left_sider_bar">
  <h2 class="sider_title"><span><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
</span></h2>
  <ul class="nav_item">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	  <li><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['item']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"><i class="am-icon-angle-double-right"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a></li>
	<?php } ?>
  </ul>
</div>
<div class="sub_left_sider_bar m-11">
  <h2 class="sider_title"><span>快速通道</span></h2>
  <ul class="nav_item">
	<li><a href="https://kh.zgqbyp.com/SelfOpenAccount/firmController.fir?funcflg=checkTime&brokerId=2351"><i class="am-icon-angle-double-right"></i>网上开户</a></li>
	<li><a href="/?/article/cat-11/"><i class="am-icon-angle-double-right"></i>银商绑定</a></li>
	<li><a target="_blank" href="tencent://message/?uin=2914044971&amp;Site=www.chaoyoubi.com&amp;Menu=yes"><i class="am-icon-angle-double-right"></i>在线咨询</a> </li>
  </ul>
</div>
<!-- 新秀 --><?php }} ?>