{*<?php exit();?>*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="{$keywords}" />
	<meta name="description" content="{$describe}" />
	<meta name="version" content="{$version}" />
	<title>{$site_title}</title>
	<link href="{$S_TPL_PATH}css/index.css" rel="stylesheet" type="text/css" />
	<link href="{$S_TPL_PATH}css/app.css" rel="stylesheet" type="text/css" />
	<link href="{$S_TPL_PATH}css/huandeng.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="{$S_TPL_PATH}js/jquery.sgallery.js"></script>	
	<script type="text/javascript" src="{$S_TPL_PATH}js/jquery-1.7.2.min(1).js"></script>
	<script type="text/javascript">$(function() {	new slide("#main-slide","cur",1000,250,1);//1});</script>
</head>
<body>
	{run module='header'}
	<div id="main">
		{run module='ad' id='2'}
		{run module='article_list'}
		{run module='link'}
	</div>
	{run module='footer'}
	
	<div class="fastbox">
	<div class="fasttitle">快速通道</div>
	<div class="onlineico"><a href="http://www.chaoyoubi.com/wskh/" target="_blank">网上开户</a></div>
	<div class="trader"><a href="?/article/cat-2/" target="_blank">银商绑定</a></div>
	<div class="contact"><a href="?/message/" target="_blank">在线咨询</a></div>
	
</div>
</body>
</html>


