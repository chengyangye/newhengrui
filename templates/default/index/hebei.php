{*<?php exit();?>*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="{$keywords}" />
	<meta name="description" content="{$describe}" />
	<meta name="version" content="{$version}" />
	<title>{$site_title}</title>

	<link href="{$S_TPL_PATH}css/new/style.css" rel="stylesheet" type="text/css" />
	<link href="{$S_TPL_PATH}css/new/index.css" rel="stylesheet" type="text/css" />
	<link href="{$S_TPL_PATH}css/new/layout.css" rel="stylesheet" type="text/css" />
	<link href="{$S_TPL_PATH}css/new/lrtk.css" rel="stylesheet" type="text/css" />
	<link href="{$S_TPL_PATH}css/swiper3.07.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
{run module='header'}

{run module='article_list_hebei'}
{run module='link'}

{run module='footer'}
</body>
</html>
<script src="{$S_TPL_PATH}js/jquery-1.7.2.min(1).js" type="text/javascript"></script>
<script src="{$S_TPL_PATH}js/swiper3.07.jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{$S_TPL_PATH}js/stepcarousel.js"></script>
<script src="{$S_TPL_PATH}js/prefixfree.min.js"></script>
<script type="text/javascript" src="{$S_TPL_PATH}js/lrtk.js"></script>
<script type="text/javascript" src="{$S_TPL_PATH}js/index.js"></script>
