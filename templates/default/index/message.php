{*<?php exit();?>*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="{$keywords}" />
	<meta name="description" content="{$describe}" />
	<meta name="version" content="{$version}" />
	<title>{$channel_title} - {$site_title}</title>
	<link href="{$S_TPL_PATH}css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
	{*run module='header'*}
	<div id="main">
		{run module='ad' id='2'}
		<div id="left">
			{include file="module/here.php"}
			{*run module='message_main'*}
		</div>
		<div id="right">
			{*run module='new_article'*}
			{*run module='best_article'*}
		</div>
		<div class="clear"></div>
	</div>
	{*run module='footer'*}
</body>
</html>
