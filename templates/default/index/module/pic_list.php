{*<?php exit();?>*}

<div class="prod">
	{if $show_all_art != 1}
	{foreach from=$best_art_cat name=best_art_cat item=cat}
	<div class="product">
		<div class="prp">
			<div class="pro"><big><a target="_blank" href="{url channel=$cat.channel cat=$cat.cat_id}">交易品种</a></big></div>
			<div class="more1"><a target="_blank" href="{url channel=$cat.channel cat=$cat.cat_id}" class="more">+MORE</a></div>
		</div>
		<div class="stepcarousel" id="mygallery">
			<div id="displaycssbelt" class="belt" style="width: 2290px; left: -229px; visibility: visible;">
				{foreach from=$art_list[$cat.cat_id] name=art_list item=item}
					<div class="panel" style="float: none; position: absolute; left: 0px;">
					<div class="subfeature"><a target="_blank" href="{url channel=$cat.channel id=$item.art_id}"><img width="174" height="170" class="post-image" alt="{$item.short_title}" src="{$item.art_img}"></a>
						<div class="subfeature-txt">
							<h2><a target="_blank" href="{url channel=$cat.channel id=$item.art_id}">{$item.short_title}</a></h2>
						</div>
					</div>
					</div>
				{/foreach}
			</div>
		</div>
	</div>
	{/foreach}
	{/if}
</div>
