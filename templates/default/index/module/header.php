{*<?php exit();?>*}
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
        <li><a href="/">首&nbsp;&nbsp;页</a></li>
        <li><a href="?/nanjing/">南京文交所</a></li>
        <li><a href="?/hebei/">河北文交所</a></li>
        <li><a href="jm.html">招商加盟</a></li>
        <li><a href="http://www.zgqbyp.com/web/news/61.html">下载中心</a></li>
        <li><a href="?/article/id-17/index.html">关于我们</a></li>
      </ul>
    </div>
</div>
{literal}
<script language="javascript">
	function do_search()
	{
		var obj = document.getElementById("form_search");
		var val = obj.key.value;
		obj.action = obj.action + "/key-" + val + "/";
		obj.submit();
	}
</script>
{/literal}
<!-- 新秀 -->
<div style="float:left; position:fixed; bottom:10px;z-index: 100000">
    <div style="width: 140px;padding: 10px 0 0;box-sizing: border-box;background-color: #F8C301;text-align: center;">
        <img style="width: 120px;" src="{$S_TPL_PATH}img/gzh.jpg"><br>
        <span style="color: #000100;padding: 5px 0;display: block;">关注微信公众号</span>
    </div>
    <div style="width: 140px;padding: 10px 0 0;box-sizing: border-box;background-color: #ffffff;text-align: center;">
        <img style="width: 120px;" src="{$S_TPL_PATH}img/app.jpg"><br>
        <span style="color: #AE1D20;padding: 5px 0;display: block;">手机APP下载</span>
    </div>
</div>


