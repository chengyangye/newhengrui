{*<?php exit();?>*}
<div class="fenye">
<ul>
    <li>上一篇：{if $prev_title}<a href="{url prefix=$prefix id=$prev_id}">{$prev_title}</a>{else}{$lang.none}{/if} </li>
    <li>下一篇：{if $next_title}<a href="{url prefix=$prefix id=$next_id}">{$next_title}</a>{else}{$lang.none}{/if} </li>
</ul>
</div>