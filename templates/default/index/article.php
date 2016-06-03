{*<?php exit();?>*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="{$keywords}" />
	<meta name="description" content="{$describe}" />
	<meta name="version" content="{$version}" />
	<title>{if $page_title}{$page_title} - {/if}{if $cat_name}{$cat_name} - {/if}{$channel_title} - {$site_title}</title>
	<link href="{$S_TPL_PATH}css/app.css" rel="stylesheet" type="text/css" />
</head>
<body>
	{run module='header'}
	<div id="main" class="wrap mt-10">
		<div id="left" class="sub_left ll">
			{run module='cat_list' id=$global.cat}
<!--			{run module='new_article'}
			{run module='best_article'}	-->
		</div>
		<div id="right" class="sub_right r">
			{include file="module/here.php"}
			{run module='article_main'}
		</div>
		<div class="clear"></div>
	</div>
	{run module='footer'}
</body>
</html>