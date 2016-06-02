<div class="box list">
	<div class="head"><span>{$cat_name}</span></div>
	<div class="main">
		{foreach from=$cat_list name=cat_list item=item}
		<div><a href="{url channel=$item.channel cat=$item.cat_id}" title="{$item.cat_name}" target="_blank">{$item.short_title}</a></div>
		{/foreach}
	</div>
</div>
<!-- 新秀 -->