{*<?php exit();?>*}
<div class="flink">
  <div class="link">
    <div class="friend">友情链接：</div>
    <ul>
    	{if $img_link}
			{foreach from=$img_link name=img_link item=item}
			<li><a target="_blank" href="{$item.lin_url}" title="{$item.lin_title}"><img src="{$item.lin_img}" /></a> </li>
			{/foreach}
			<div class="clear"></div>
		{/if}
		{if $word_link}
			{foreach from=$word_link name=word_link item=item}
			<li><a target="_blank" href="{$item.lin_url}" title="{$item.lin_title}" >{$item.lin_word}</a> </li>
			{/foreach}
		{/if}
    </ul>
  </div>

</div>
<!-- 新秀 -->
