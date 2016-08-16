<?php /* Smarty version Smarty-3.1.3, created on 2016-08-16 09:50:08
         compiled from "templates/default/index\module\header.php" */ ?>
<?php /*%%SmartyHeaderCode:2510457ae6e1582b213-47754203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4a3500fec1ebbe290b9826a6ef0a53de5f58da' => 
    array (
      0 => 'templates/default/index\\module\\header.php',
      1 => 1471312206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2510457ae6e1582b213-47754203',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57ae6e1584291',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ae6e1584291')) {function content_57ae6e1584291($_smarty_tpl) {?>
<div id="header">
	<!--<div class="top">
        <div class="wrap">
          <div id="top_notice">
            <ul>

              <li>欢迎访问<h1>南京文交所</h1>开户网站！</li>

            </ul>
          </div>
          <ul class="top_link">

    		<li> <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://test.zongyangtech.cn');" href="#">设为首页</a></li>

    		<li><a href="javascript:window.external.AddFavorite('http://test.zongyangtech.cn','南京文交所-南京文交所钱币邮票交易中心开户|南京文交所钱币藏品交易中心开户')">加入收藏</a></li>
          </ul>
          <div class="clear"></div>
        </div>
    </div>-->
    <div class="logo_"><div class="logo"> <img style="float:left;" src="templates/default/img/logo.jpg">
    </div>
    </div>
    <div id="navmenu" class="nav_bg">
      <ul id="navi">
        <li><a href="">首&nbsp;&nbsp;页</a></li>
        <li><a href="?/nanjing/">南京文交所</a></li>
        <li><a href="?/hebei/">河北文交所</a></li>
        <li><a href="http://jm.zifengwenjin.com/">招商加盟</a></li>
        <li><a href="/download/">下载中心</a></li>
        <li><a href="/about/">关于我们</a></li>
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