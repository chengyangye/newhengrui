<?php /* Smarty version Smarty-3.1.3, created on 2016-05-27 13:35:14
         compiled from "templates/default/index/module/header.php" */ ?>
<?php /*%%SmartyHeaderCode:1120129845747dc926c9ca7-39427947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '922a63af34534b1d83c01d62dcdc425d72f36076' => 
    array (
      0 => 'templates/default/index/module/header.php',
      1 => 1464321102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1120129845747dc926c9ca7-39427947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nav' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5747dc926f94b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747dc926f94b')) {function content_5747dc926f94b($_smarty_tpl) {?>
<div id="header">
	<div class="top">
        <div class="wrap">
          <div id="top_notice">
            <ul>

              <li>欢迎访问<h1>南方文交所</h1>开户网站！</li>

            </ul>
          </div>
          <ul class="top_link">

    		<li> <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.chaoyoubi.com');" href="">设为首页</a></li>

    		<li><a href="javascript:window.external.AddFavorite('http://www.chaoyoubi.com','南方文交所-南方文交所钱币邮票交易中心开户|南方文交所钱币藏品交易中心开户')">加入收藏</a></li>

            <li><a target="_blank" href="http://www.chaoyoubi.com/sitemap.html">网站地图</a></li>

            <li><a target="_blank" href="http://www.chaoyoubi.com/rssmap.html">RSS地图</a></li>
          </ul>
          <div class="clear"></div>
        </div>
    </div>
	<div class="wrap">
        <div class="logo l"><a target="_blank" href="/"><img alt="南方文交所" src="templates/default/images/logo.png" data-bd-imgshare-binded="1"></a></div>
        <div class="clear"></div>
    </div>
</div>
<div class="wrop">
	<div id="main_nav">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['target']==1){?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['men_name'];?>
</a></li>
			<?php } ?>
			<div class="clear"></div>
		</ul>
	</div>
</div>

<script language="javascript">
	function do_search()
	{
		var obj = document.getElementById("form_search");
		var val = obj.key.value;
		obj.action = obj.action + "/key-" + val + "/";
		obj.submit();
	}
</script>

<!-- 新秀 -->
<?php }} ?>