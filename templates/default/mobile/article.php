{*<?php exit();?>*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="keywords" content="{$keywords}" />
	<meta name="description" content="{$describe}" />
	<meta name="version" content="{$version}" />
	<title>{if $page_title}{$page_title} - {/if}{if $cat_name}{$cat_name} - {/if}{$channel_title} - {$site_title}</title>
	<link href="{$S_TPL_PATH}css/mobile.css" rel="stylesheet" type="text/css" />
</head>
<body>
	{run module='header'}
	<div id="main">
		{include file="module/here.php"}
		{run module='article_main'}
	</div>
	{run module='footer'}
</body>
</html>