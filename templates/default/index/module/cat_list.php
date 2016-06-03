<div class="sub_left_sider_bar">
  <h2 class="sider_title"><span>{$cat_name}</span></h2>
  <ul class="nav_item">
	{foreach from=$cat_list name=cat_list item=item}
	  <li><a href="{url channel=$item.channel cat=$item.cat_id}"><i class="am-icon-angle-double-right"></i>{$item.short_title}</a></li>
	{/foreach}
  </ul>
</div>
<div class="sub_left_sider_bar m-11">
  <h2 class="sider_title"><span>快速通道</span></h2>
  <ul class="nav_item">
	<li><a href="http://www.chaoyoubi.com/wskh/"><i class="am-icon-angle-double-right"></i>网上开户</a></li>
	<li><a href="http://www.chaoyoubi.com/yhbd/"><i class="am-icon-angle-double-right"></i>银商绑定</a></li>
	<li><a target="_blank" href="tencent://message/?uin=2914044971&amp;Site=www.chaoyoubi.com&amp;Menu=yes"><i class="am-icon-angle-double-right"></i>在线咨询</a> </li>
  </ul>
</div>
<!-- 新秀 -->