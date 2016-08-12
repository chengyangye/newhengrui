{*<?php exit();?>*}
{if $show_all_art != 1}
<!--<div class="wrap mt-10"><div class="index_center ">-->
	{foreach from=$best_art_cat name=best_art_cat item=cat}
		{if $smarty.foreach.best_art_cat.index ==2}
			<div class="wrap mt-10">
        		<iframe width="999" height="245" frameborder="0" src="http://180.97.2.74:16000/tradeweb/hq/hqV_lb.jsp" scrolling="No" marginwidth="0" marginheight="0"></iframe>
        	</div>
		{/if}
		{if $smarty.foreach.best_art_cat.index % 2 == 0}<div class="wrap mt-10"><div class="index_center ">{/if}
		<div class="index_list_news l">
			<h2 class="list_news_title">{$cat.cat_name} <span>  <a href="{url channel=$cat.channel cat=$cat.cat_id}">更多</a>  </span></h2>
			<ul>
				{foreach from=$art_list_nj[$cat.cat_id] name=art_list_nj item=item}
					<li><a title="{$item.art_title}" target="_blank" href="{url channel=$cat.channel id=$item.art_id}">{$item.cat_name}{$item.short_title}</a><span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span></li>
				{/foreach}
			</ul>
			<ul>
				{foreach from=$art_list_hb[$cat.cat_id] name=art_list_hb item=item}
					<li><a title="{$item.art_title}" target="_blank" href="{url channel=$cat.channel id=$item.art_id}">{$item.cat_name}{$item.short_title}</a><span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span></li>
				{/foreach}
			</ul>
		</div>
		{if $smarty.foreach.best_art_cat.index % 2 == 1 || $smarty.foreach.best_art_cat.last}<div class="clear"></div></div></div>{/if}
	{/foreach}
<!--<div class="clear"></div></div></div>-->
{/if}
<!-- 新秀 -->
