{*<?php exit();?>*}
<div class="pos">
	<div class="ps_1200">
		<img src="{$S_TPL_PATH}img/pos.png">&nbsp;&nbsp;你的位置: <a href="/">恒瑞文金</a> &gt; <a href="?/nanjing/">南京文交所</a>
	</div>
</div>

<div class="h_365">
	<div class="tzgg">
		<!-- 通知公告&资讯 -->
		<div style="float: left;height: 100%;margin-top: 15px;width: 750px;">
			<div style="font-size:20px; margin-bottom:20px">资讯&amp;公告中心 <i style="font-size:15px; color:#CCC">Information</i></div>
			<div id="table_2" class="tab_l">
				{foreach from=$best_art_cat name=best_art_cat item=cat}
				{if $smarty.foreach.best_art_cat.index ==0}
				<div><a class="thover" href="{url channel=$cat.channel cat=$cat.cat_id}" >{$cat.cat_name}</a></div>
				{else}
				<div><a class="" href="{url channel=$cat.channel cat=$cat.cat_id}">{$cat.cat_name}</a></div>
				{/if}
				{/foreach}
			</div>
			<script language="javascript">

				$(function(){

					$("#table_2 div").hover(function(){


						var ind1=$("#table_2 div").index(this);

						$(this).find("a").addClass("thover").parent("div").siblings("div").find("a").removeClass("thover");

						$(".con_tab_12").eq(ind1).show().siblings().hide();

					});

				})

			</script>
			<div class="ht_con">
				<div class="con_tab_12" id="con_stab_1" style="display: block;">
					<div class="ht_pic">
						<div class="ht_pic_left"><img width="180" height="105" src="{$S_TPL_PATH}img/0ZF31096-0-lp.png">
						</div>
						<div class="ht_pic_right">
							<div class="ht_pic_right_top">
								<a href="/notice/nj/2016/3686.html">
									<h1>20160811关于汪新淮同志的任命通知</h1>
								</a>
								<p>各单位、部门： 因公司经营发展需要，经研究决定：任命汪新淮同志为钱币邮票交易中心总经理。 特此通知。 南京|中南文交所紫峰文金 2016年08月12日...<a href="/notice/nj/2016/3686.html">[查看详情]</a></p>
							</div>
						</div>
						<div class="xian"></div>
						<div class="liebiao">
							<ul><li><i><img src="{$S_TPL_PATH}img/li.png">&nbsp;&nbsp;</i><a href="/notice/nj/2016/3685.html">20160811关于藏品《二轮兑奖蛇小... </a><span>2016-08-12</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/notice/nj/2016/3639.html">20160808藏品《53年无油壹分券》停... </a><span>2016-08-09</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/notice/nj/2016/3627.html">20160806藏品《53年无油壹分券》停... </a><span>2016-08-08</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/notice/nj/2016/3611.html">20160805藏品《53年无油壹分券》停... </a><span>2016-08-06</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/notice/nj/2016/3597.html">20160804藏品《53年无油壹分券》停... </a><span>2016-08-05</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/notice/nj/2016/3583.html">20160803关于《红三凸壹角券》等... </a><span>2016-08-04</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/notice/nj/2016/3582.html">20160803藏品《53年无油壹分券》停... </a><span>2016-08-04</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/notice/nj/2016/3572.html">20160802关于交易藏品《二轮梅银... </a><span>2016-08-03</span></li>

							</ul></div>
					</div>
				</div>

				<!--end con_stab_1-->
				<div style="display: none;" class="con_tab_12" id="con_stab_2">
					<div class="ht_pic">
						<div class="ht_pic_left"><img width="180" height="105" src="/uploads/allimg/160815/1-160Q50Z6044N-lp.jpg">
						</div>
						<div class="ht_pic_right">
							<div class="ht_pic_right_top"> <a href="/purchase/nj/2016/3466.html">
								<h1>20160722《53年无油壹分券》等藏品申购中签</h1>
							</a>
								<p>南京文交所钱币邮票交易中心（以下称本中心）于2016年7月21日对挂牌藏品《53年无油壹分券》、《儒林外史小版》面向所有交易会员进行定价申购发行，具体事项公告如下： 藏品代码...<a href="/purchase/nj/2016/3466.html">[查看详情]</a></p>

							</div>
						</div>
						<div class="xian"></div>
						<div class="liebiao">
							<ul><li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/purchase/nj/2016/3392.html">20160714《53年无油壹分券》等藏品... </a><span>2016-07-14</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/purchase/nj/2016/3076.html">20160603《武汉大学套票》等藏品... </a><span>2016-06-04</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/purchase/nj/2016/3016.html">20160530《武汉大学套票》等藏品... </a><span>2016-05-31</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/purchase/nj/2016/2991.html">20160527交易藏品《二轮生肖套票... </a><span>2016-05-28</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/purchase/nj/2016/2836.html">20160517《香港万里长城型张》等... </a><span>2016-05-18</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/purchase/nj/2016/2648.html">20160504《香港万里长城型张》等... </a><span>2016-05-05</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/purchase/nj/2016/2605.html">20160429《澳门中国55周年套票》等... </a><span>2016-04-30</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/purchase/nj/2016/2556.html">20160426《澳门中国55周年套票》等... </a><span>2016-04-27</span></li>

							</ul></div>
					</div>
				</div>

				<!--end con_stab_2-->
				<div style="display: none;" class="con_tab_12" id="con_stab_3">
					<div class="ht_pic">
						<div class="ht_pic_left"><img width="180" height="105" src="/uploads/allimg/160815/1-160Q50Z6044N-lp.jpg">
						</div>
						<div class="ht_pic_right">
							<div class="ht_pic_right_top"><a href="/hosting/nj/2016/3713.html">
								<h1>20160812藏品《桃花坞小全张》托管入库公</h1>
							</a>
								<p>本中心受普通交易会员申请，于2016年4月18日组织相关机构对申请人所递交之藏品在指定地点进行专业鉴定，具体内容公告如下： 1、本次鉴定入库藏品清单： 序号 藏品名称 藏品 代码...<a href="/hosting/nj/2016/3713.html">[查看详情]</a></p>

							</div>
						</div>
						<div class="xian"></div>
						<div class="liebiao">
							<ul><li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/hosting/nj/2016/3594.html">20160804藏品《地质大会套票》托... </a><span>2016-08-05</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/hosting/nj/2016/3487.html">20160725藏品《无锡亚展双联型张... </a><span>2016-07-26</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/hosting/nj/2016/3272.html">20160628藏品《53年无油壹分券》托... </a><span>2016-06-29</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/hosting/nj/2016/3206.html">20160621《猴王出世》等藏品商城... </a><span>2016-06-22</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/hosting/nj/2016/3102.html">20160607关于托管进度查询系统上... </a><span>2016-06-08</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/hosting/nj/2016/3103.html">托管进度查询系统强势来袭... </a><span>2016-06-08</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/hosting/nj/2016/3052.html">20160601藏品《澳门孝套票》托管... </a><span>2016-06-02</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/hosting/nj/2016/3017.html">20160530藏品《09农行熊猫银币》托... </a><span>2016-05-31</span></li>

							</ul></div>
					</div>
					<div class="clear"></div>
				</div>

				<!--end con_stab_3-->
				<div style="display: none;" class="con_tab_12" id="con_stab_4">
					<div class="ht_pic">
						<div class="ht_pic_left"><img width="180" height="105" src="/uploads/allimg/160815/1-160Q50Z6044N-lp.jpg">
						</div>
						<div class="ht_pic_right">
							<div class="ht_pic_right_top"><a href="/review/zn/2016/0815/3737.html">
								<h1>中南20160813综述 | 大盘持续底部放量，黎</h1>
							</a>
								<p>大盘8月13日报收于48.28,成交5.78亿，成交额较上个交易日增加，换手率8.79%，量比1.09。大盘有38只品种上涨，4只藏品涨停，有30只品种下跌,无藏品跌停。成交金额较大的是邮票板块成交...<a href="/review/zn/2016/0815/3737.html">[查看详情]</a></p>

							</div>
						</div>
						<div class="xian"></div>
						<div class="liebiao">
							<ul><li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/review/nj/2016/0813/3726.html">华山论剑20160813期... </a><span>2016-08-13</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/review/zn/2016/0813/3714.html">中南20160812综述 | 市场出现震荡... </a><span>2016-08-13</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/review/nj/2016/0812/3702.html">华山论剑20160812期... </a><span>2016-08-12</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/review/zn/2016/0812/3691.html">中南20160811综述 | 行情回暖，大... </a><span>2016-08-12</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/review/nj/2016/0811/3682.html">华山论剑20160811期... </a><span>2016-08-11</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/review/zn/2016/0811/3673.html">中南8月10日综述 | 小幅走高，中... </a><span>2016-08-11</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/review/nj/2016/0810/3662.html">华山论剑20160810期... </a><span>2016-08-10</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/review/zn/2016/0810/3660.html">中南邮票交易8月9日行情综述... </a><span>2016-08-10</span></li>

							</ul></div>
					</div>
					<div class="clear"></div>
				</div>
				<!--end con_stab_4-->
				<div style=" display:none;" class="con_tab_12" id="con_stab_5">
					<div class="ht_pic">
						<div class="ht_pic_left"><img width="180" height="105" src="/uploads/allimg/160815/1-160Q50Z6044N-lp.jpg">
						</div>
						<div class="ht_pic_right">
							<div class="ht_pic_right_top"><a href="/news/2016/3719.html">
								<h1>共谋发展 南京文交所召开经纪商培训会</h1>
							</a>
								<p>2016年8月11日上午， 南京文交所 在南京召开了为期两天的经纪商培训会，培训内容主要包括业务学习、政策解读、互动交流和现场考试等环节。会议旨在通过两天的专业培训，解决各经...<a href="/news/2016/3719.html">[查看详情]</a></p>

							</div>
						</div>
						<div class="xian"></div>
						<div class="liebiao">
							<ul><li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/news/2016/3700.html">汪新淮任总经理，南京开启新未... </a><span>2016-08-12</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/news/2016/3666.html">邮币卡行业大佬聚会上邮共商发... </a><span>2016-08-10</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/news/2016/3636.html">2016年南京文交所傲人成绩... </a><span>2016-08-08</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/news/2016/3529.html">袁亚非：我收购南京文交所的最... </a><span>2016-07-29</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/news/2016/3500.html">转发:宏图参股南京文交所解读... </a><span>2016-07-27</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/news/2016/3481.html">中南第四次“投资人”协会代表... </a><span>2016-07-25</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/news/2016/3440.html">中南邮票交易中心举办首次摇号... </a><span>2016-07-20</span></li>
								<li><i><img src="/img/li.png">&nbsp;&nbsp;</i><a href="/news/2016/3421.html">南京文交所钱币邮票交易中心投... </a><span>2016-07-18</span></li>

							</ul></div>
					</div>
					<div class="clear"></div>
				</div>
				<!--end con_stab_5-->
			</div>
		</div>
		<!-- 通知公告&资讯 -->
		<!--联系我们 -->
		<div class="contact">
			<div style="font-size:20px; margin-bottom:20px">联系我们<i style="font-size:15px; color:#CCC">Contact US</i><span style="float:right"><a style="font-size:15px" class="red" href="/about/contact/">+MORE</a></span></div>
			<div class="zfwjwx"><img src="{$S_TPL_PATH}img/zfwj.jpg"></div>
			<div class="zfwjwx"><img border="0" usemap="#Map" src="{$S_TPL_PATH}img/lxfs.png">
				<map id="Map" name="Map">
					<area href="http://jq.qq.com/?_wv=1027&amp;k=29meoV9" coords="5,28,93,53" shape="rect">
				</map>
			</div>
			<div class="dizhi">公司地址：江苏省常州市新北区太湖东路9号软件园北楼A307(恒记花园酒店对面) </div>
		</div>
		<!--联系我们 -->
	</div>
</div>