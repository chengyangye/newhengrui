{*<?php exit();?>*}
<div class="page">
	<ul>
		{if $page_sum != 1}
		<li><a href="{url prefix=$prefix page=1}">首页</a></li>
		{if $page-1 > 0}<li><a href="{url prefix=$prefix page=$page-1}">上一页</a></li>{/if}
		{if $page-4 > 0}<li><a class="num" href="{url prefix=$prefix page=$page-4}">{$page-4}</a></li>{/if}
		{if $page-3 > 0}<li><a class="num" href="{url prefix=$prefix page=$page-3}">{$page-3}</a></li>{/if}
		{if $page-2 > 0}<li><a class="num" href="{url prefix=$prefix page=$page-2}">{$page-2}</a></li>{/if}
		{if $page-1 > 0}<li><a class="num" href="{url prefix=$prefix page=$page-1}">{$page-1}</a></li>{/if}
		<li><a class="on" href="{url prefix=$prefix page=$page}">{$page}</a></li>
		{if $page+1 <= $page_sum}<li><a class="num" href="{url prefix=$prefix page=$page+1}">{$page+1}</a></li>{/if}
		{if $page+2 <= $page_sum}<li><a class="num" href="{url prefix=$prefix page=$page+2}">{$page+2}</a></li>{/if}
		{if $page+3 <= $page_sum}<li><a class="num" href="{url prefix=$prefix page=$page+3}">{$page+3}</a></li>{/if}
		{if $page+4 <= $page_sum}<li><a class="num" href="{url prefix=$prefix page=$page+4}">{$page+4}</a></li>{/if}
		{if $page+1 <= $page_sum}<li><a href="{url prefix=$prefix page=$page+1}">下一页</a></li>{/if}
		<li><a href="{url prefix=$prefix page=$page_sum}">末页</a></li>
		{/if}
	</ul>
</div>
