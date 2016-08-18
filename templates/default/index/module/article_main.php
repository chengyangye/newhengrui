{*<?php exit();?>*}

<div class="pos">
	<div class="ps_1200">
		<img src="{$S_TPL_PATH}img/pos.png">&nbsp;&nbsp;你的位置:
		<a href="./">{$lang.home}</a>
		{if $channel_title}-&gt;<a href="{url channel=$global.channel}">{$channel_title}</a>{/if}
		{if $cat_name}-&gt;<a href="{url channel=$global.channel cat=$global.cat}">{$cat_name}</a>{/if}
		{if $page_title}-&gt;<a href="{url channel=$global.channel id=$global.id}">{$page_title|truncate:20}</a>{/if}
	</div>
</div>
<div class="100">
	<div class="content">
		<!--左侧开始 -->
		<div class="left">
			<div class="zt">
				<ul>
					<li class="li_a"><a href="https://kh.zgqbyp.com/SelfOpenAccount/index.jsp?brokerId=2351">南京文交所开户中心</a></li>
					<li class="li_b"><a href="https://z.hbyoubi.com:16919/SelfOpenAccount/index.jsp?brokerId=21085">河北文交所开户中心</a></li>
				</ul>
			</div>

			<!-- 下载中心 -->
			<div class="kaihu">
				<div id="tab_con">
					<div class="fdiv wx">
						<img style="margin-top:10px; width:273px; height:59px" class="phone1" src="{$S_TPL_PATH}img/phone1.jpg">
						<p style="text-align:center;width:273px; height:40px; line-height:30px;color:#444444; font-size:15px; width:273px; margin-top:5px;">
							南京文交所：3244603778&nbsp;<a target="_blank" href="tencent://message/?uin=3244603778&Site">
							<img style="vertical-align: middle;width: 85px;" alt="在线咨询" src="{$S_TPL_PATH}img/qqq.jpg"></a>
						</p>
						<big style="text-align:center;width:273px; height:40px; line-height:30px;color:#444444; font-size:15px; width:273px; margin-top:5px;">
							河北文交所：3270541268<a target="_blank" href="tencent://message/?uin=3270541268&Site">
							<img style="vertical-align:middle; width: 85px;" alt="在线咨询" src="{$S_TPL_PATH}img/qqq.jpg"></a></big>
					</div>
				</div>

				<div class="weixin"> <img width="95" height="95" style="margin-right:20px;" src="{$S_TPL_PATH}img/wx.png">
					<div class="zfwj"><b>恒瑞文金</b>
						<p>南京|河北文交所<br>
							第一服务品牌</p>
					</div>
				</div>
			</div>
		</div>
		<if class="right">
			{if $show_sheet == 1}
			{if $show_pic==0}
			<div class="name">
				<img src="{$S_TPL_PATH}img/sg.jpg"><b>{if $channel_title}{$channel_title}{/if}{if $cat_name}{$cat_name}{/if}{if $page_title}{$page_title}{/if}</b>
			</div>
			<div class="list">
				{foreach from=$article name=article item=item}
				<ul class="">
					<li><img src="{$S_TPL_PATH}img/li-p.png">&nbsp;&nbsp;&nbsp;<a href="{url channel=$global.channel id=$item.art_id}">{$item.art_title}</a></li>
					<span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span>
					<p>{$item.art_description}<a class="red" href="{url channel=$global.channel id=$item.art_id}">[阅读全文]</a></p>
				</ul>
				{/foreach}
				{include file="module/page_link.php" page=$global.page}
			</div>
			{else}
					<div class="name">
						<img src="{$S_TPL_PATH}img/sg.jpg"><b>交易品种</b>
					</div>
					<div class="list_p">
						<ul class="list_">
							{foreach from=$article name=article item=item}
							<li><img width="204" height="198" src="{$item.art_img}"><b><a href="{url channel=$global.channel id=$item.art_id}">{$item.art_title}</a></b></li>
							{/foreach}
						</ul>
						{include file="module/page_link.php" page=$global.page}
					</div>
			{/if}
			{else}
			<div class="name">
				<img src="{$S_TPL_PATH}img/sg.jpg"><b>{$article.art_title}</b>
			</div>
			<div class="cont">
				<div class="xiaohao"><big class="red">发布者：{$article.art_author}</big>&nbsp;&nbsp;&nbsp;发布时间：{$article.art_add_time|date_format:"%Y-%m-%d %H:%M"}&nbsp;&nbsp;&nbsp;</div>
				<!--<div class="zaiyao"><b>摘要：</b>鉴于邮币卡现货线上交易平台快速发展，截止至目前，全国已有30多家交易平台投入运营，正在筹备的有20多家，为了行业的健康发展，行业规范亟待建立。为统一全国各地文交所运营规...</div>-->
				<div class="art">
					{$article.art_text}
					<!-- JiaThis Button BEGIN -->
					<!-- JiaThis Button END -->

				</div>
				<div style="padding: 20px 0 0;vertical-align: middle">
					<span style="vertical-align: middle;">分享到:</span>&nbsp;&nbsp;<div class="bdsharebuttonbox" style="display: inline-block;vertical-align: middle"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
				</div>
				{include file="module/prev_next.php" id=$global.id}
			</div>
			{/if}

	<!--右侧结束 -->
</div>
</div>
