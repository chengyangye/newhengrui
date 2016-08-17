{*<?php exit();?>*}
{if $show_all_art != 1}

	{foreach from=$best_art_cat name=best_art_cat item=cat}
		{if $smarty.foreach.best_art_cat.index % 3 == 0}<div>{/if}
		<div class="box list">
			<div class="head">
				<span>{$cat.cat_name}</span>
				<a class="more" href="{url channel=$cat.channel cat=$cat.cat_id}">更多&gt;&gt;</a>
			</div>
			<div class="main">
				{foreach from=$art_list[$cat.cat_id] name=art_list item=item}
				<div><a href="{url channel=$cat.channel id=$item.art_id}" title="{$item.art_title}" target="_blank">{$item.short_title}</a></div>
				{if $item.show_desc ==1}
					<li><a target="_blank">{$item.short_desc}</a></li>
				{/if}
				{/foreach}
			</div>
		</div>
		{if $smarty.foreach.best_art_cat.index % 3 == 2 || $smarty.foreach.best_art_cat.last}<div class="clear"></div></div>{/if}
	{/foreach}

<!--
        <div class="ht_con">
            {foreach from=$best_art_cat name=best_art_cat item=cat}
            {if $smarty.foreach.best_art_cat.index ==0}
                <div class="con_tab_12" style="display: block;">
                {else}
                <div class="con_tab_12" style="display: none;">
             {/if}

                <div class="line"></div>
                <div class="ht_pic">
                    <div class="ht_pic_left"><img src="{$S_TPL_PATH}img/imgtzfooter{$smarty.foreach.best_art_cat.index}.jpg"></div>
                    <div class="ht_pic_right">
                        <div class="znwjs"><a target="_blank" href="/notice/zn/"><img src="{$S_TPL_PATH}img/zn.jpg"></a></div>
                        {foreach from=$art_list[$cat.cat_id] name=art_list item=item}
                        {if $smarty.foreach.art_list_hb.index ==0}
                        <div class="ht_pic_right_top"><a target="_blank" href="{url channel=$cat.channel id=$item.art_id}">
                            <h1>{$item.short_title}</h1>
                        </a>
                            <p>{$item.art_description}<a target="_blank" href="{url channel=$cat.channel id=$item.art_id}">[查看详情]</a></p>
                        </div>
                        {/if}
                        {/foreach}
                        <div class="xian"></div>
                        <ul>
                            {foreach from=$art_list[$cat.cat_id] name=art_list item=item}
                            {if $smarty.foreach.art_list.index !=0}
                            <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="{url channel=$cat.channel id=$item.art_id}">{$item.short_title}</a><span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span></li>
                            {/if}
                            {/foreach}

                        </ul>
                    </div>
                </div>
            </div>
            {/foreach}

        </div>
-->	
{/if}
<!-- 新秀 -->