{*<?php exit();?>*}
<!--{if $show_all_art != 1}
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
{/if}-->

<div class="tz">
  <!--通知公告开始 -->
  <div class="news">
    <!--通知公告左侧开始 -->
    <div class="news-left">
      <div class="h_tab">
        <div id="table_2" class="tab_l">
          <div id="stab1"><a target="_blank" class="" href="/notice/" class="thover">通知公告</a></div>
          <div id="stab2"><a target="_blank" href="/purchase/">大盘综述</a></div>
          <div id="stab3"><a target="_blank" href="/hosting/" class="">行业新闻</a></div>
          <div id="stab4"><a target="_blank" href="/review/" class="">恒瑞讲堂</a></div>
          <div id="stab5"><a target="_blank" href="/news/" class="">托管公告</a></div>
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

<!--start 读取真实数据样式没调-->      
{if $show_all_art != 1}
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
				<a href="{url channel=$cat.channel_nj cat=$cat.cat_id}">南京文交所</a>
				{foreach from=$art_list_nj[$cat.cat_id] name=art_list_nj item=item}
					<li><a title="{$item.art_title}" target="_blank" href="{url channel=$cat.channel id=$item.art_id}">{$item.short_title}</a><span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span></li>
						{if $item.show_desc ==1}
							<li><a target="_blank">{$item.short_desc}</a></li><!--这边显示第一条新闻的摘要-->
						{/if}
				{/foreach}
			</ul>

			<ul>
				<a href="{url channel=$cat.channel_hb cat=$cat.cat_id}">河北文交所</a>
				{foreach from=$art_list_hb[$cat.cat_id] name=art_list_hb item=item}
					<li><a title="{$item.art_title}" target="_blank" href="{url channel=$cat.channel id=$item.art_id}">{$item.short_title}</a><span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span></li>
						{if $item.show_desc ==1}
							<li><a target="_blank">{$item.short_desc}</a></li><!--这边显示第一条新闻的摘要-->
						{/if}
				{/foreach}
			</ul>
		</div>
		{if $smarty.foreach.best_art_cat.index % 2 == 1 || $smarty.foreach.best_art_cat.last}<div class="clear"></div></div></div>{/if}
	{/foreach}
{/if}
<!--end 读取真实数据样式没调-->      
      <!--
        <div class="ht_con">
          <div class="con_tab_12" id="con_stab_1" style="display: none;">
            <div class="ht_pic">
              <div class="ht_pic_left"><img src="{$S_TPL_PATH}img/imgtz.jpg"></div>
              <div class="ht_pic_right">
                <div class="znwjs"><a target="_blank" href="/notice/nj/"><img src="{$S_TPL_PATH}img/nj.jpg"></a></div>
                <div class="ht_pic_right_top"><a target="_blank" href="/notice/nj/2016/3639.html">
                  <h1>20160808藏品《53年无油壹分券》停牌公告</h1>
                  </a>
                  <p>下列藏品于2016年8月5日、8月6日、8月8日连续三个交易日价格涨停： 藏品名称 藏品代码 涨跌停 53年无油壹分券 50100...<a target="_blank" href="/notice/nj/2016/3639.html">[查看详情]</a></p>
</div>
                <div class="xian"></div>
                <ul>
                  <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/notice/nj/2016/3627.html">20160806藏品《53年无油壹分券》停牌公告...</a><span>2016-08-08</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/notice/nj/2016/3611.html">20160805藏品《53年无油壹分券》停牌公告...</a><span>2016-08-06</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/notice/nj/2016/3597.html">20160804藏品《53年无油壹分券》停牌公告...</a><span>2016-08-05</span></li>

                </ul>
              </div>
            </div>
            <div class="line"></div>
            <div class="ht_pic">
              <div class="ht_pic_left"><img src="{$S_TPL_PATH}img/imgtz1.jpg"></div>
              <div class="ht_pic_right">
                <div class="znwjs"><a target="_blank" href="/notice/zn/"><img src="{$S_TPL_PATH}img/zn.jpg"></a></div>
                <div class="ht_pic_right_top"><a target="_blank" href="/notice/zn/2016/3672.html">
                  <h1>20160810 关于增加“涨幅板”和“跌幅板”的公告</h1>
                  </a>
                  <p>为进一步丰富藏品板块，更加直观地为广大投资人会员提供服务，增加投资人会员便捷了解大盘行情和藏品涨跌幅排...<a target="_blank" href="/notice/zn/2016/3672.html">[查看详情]</a></p>
</div>
                <div class="xian"></div>
                <ul>
                  <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/notice/zn/2016/3671.html">20160810 《山海关片》等藏品停牌公告...</a><span>2016-08-11</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/notice/zn/2016/3655.html">20160809 藏品《十运会小型张》挂牌交易公告...</a><span>2016-08-10</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/notice/zn/2016/3654.html">20160809 藏品《大雁塔片》申购中签公告...</a><span>2016-08-10</span></li>

                </ul>
              </div>
            </div>
          </div>

          <div style="display: block;" class="con_tab_12" id="con_stab_2">
            <div class="ht_pic">
              <div class="ht_pic_left"><img src="{$S_TPL_PATH}img/imgsg.jpg"></div>
              <div class="ht_pic_right">
                <div class="znwjs"><a target="_blank" href="/purchase/nj/"> <img src="{$S_TPL_PATH}img/nj.jpg"></a></div>
                <div class="ht_pic_right_top"><a target="_blank" href="/purchase/nj/2016/3466.html">
                  <h1>20160722《53年无油壹分券》等藏品申购中签公告</h1>
                  </a>
                  <p>南京文交所钱币邮票交易中心（以下称本中心）于2016年7月21日对挂牌藏品《53年无油壹分券》、《儒林外史小版》面...<a target="_blank" href="/purchase/nj/2016/3466.html">[查看详情]</a></p>
</div>
                <div class="xian"></div>
                <ul>
                  <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/purchase/nj/2016/3392.html">20160714《53年无油壹分券》等藏品挂牌交易公告...</a><span>2016-07-14</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/purchase/nj/2016/3076.html">20160603《武汉大学套票》等藏品申购中签公告...</a><span>2016-06-04</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/purchase/nj/2016/3016.html">20160530《武汉大学套票》等藏品挂牌交易公告...</a><span>2016-05-31</span></li>

                </ul>
              </div>
            </div>
            <div class="line"></div>
            <div class="ht_pic">
              <div class="ht_pic_left"><img src="{$S_TPL_PATH}img/imgsg1.jpg"></div>
              <div class="ht_pic_right">
                <div class="znwjs"><a target="_blank" href="/purchase/zn/"><img src="{$S_TPL_PATH}img/zn.jpg"></a></div>
                <div class="ht_pic_right_top"><a target="_blank" href="/purchase/zn/2016/3613.html">
                  <h1>20160805 藏品《山海关片》申购中签公告</h1>
                  </a>
                  <p>湖南省中南邮票交易中心有限公司（以下称本中心）于2016年8月4日对挂牌藏品《山海关片》面向所有投资人会员进行...<a target="_blank" href="/purchase/zn/2016/3613.html">[查看详情]</a></p>
</div>
                <div class="xian"></div>
                <ul>
                  <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/purchase/zn/2016/3573.html">20160802 藏品《大雁塔片》挂牌交易公告...</a><span>2016-08-03</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/purchase/zn/2016/3574.html">20160802藏品《山海关片》挂牌交易公告...</a><span>2016-08-03</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/purchase/zn/2016/3556.html">20160801 藏品《孔子教育奖封》申购中签公告...</a><span>2016-08-02</span></li>

                </ul>
              </div>
            </div>
          </div>

          <div style="display: none;" class="con_tab_12" id="con_stab_3">
            <div class="ht_pic">
              <div class="ht_pic_left"><img src="{$S_TPL_PATH}img/imgtg.jpg"></div>
              <div class="ht_pic_right">
                <div class="znwjs"><a target="_blank" href="/hosting/nj/"><img src="{$S_TPL_PATH}img/nj.jpg"></a></div>
                <div class="ht_pic_right_top"><a target="_blank" href="/hosting/nj/2016/3594.html">
                  <h1>20160804藏品《地质大会套票》托管入库公告</h1>
                  </a>
                  <p>本中心受普通交易会员申请，于2016年6月20日至8月4日组织相关机构对申请人所递交之藏品在指定地点进行专业鉴定，...<a target="_blank" href="/hosting/nj/2016/3594.html">[查看详情]</a></p>
</div>
                <div class="xian"></div>
                <ul>
                  <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/hosting/nj/2016/3487.html">20160725藏品《无锡亚展双联型张》托管入库公告...</a><span>2016-07-26</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/hosting/nj/2016/3272.html">20160628藏品《53年无油壹分券》托管入库公告...</a><span>2016-06-29</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/hosting/nj/2016/3206.html">20160621《猴王出世》等藏品商城鉴定托管公告...</a><span>2016-06-22</span></li>

                </ul>
              </div>
            </div>
            <div class="line"></div>
            <div class="ht_pic">
              <div class="ht_pic_left"><img src="{$S_TPL_PATH}img/imgtg1.jpg"></div>
              <div class="ht_pic_right">
                <div class="znwjs"><a target="_blank" href="/hosting/zn/"><img src="{$S_TPL_PATH}img/zn.jpg"></a></div>
                <div class="ht_pic_right_top"><a target="_blank" href="/hosting/zn/2016/3557.html">
                  <h1>20160801 《大雁塔片》等藏品托管入库公告</h1>
                  </a>
                  <p>湖南省中南邮票交易中心有限公司受普通投资人会员申请，于2015年12月3日至2016年7月6日期间组织相关机构对申请人所...<a target="_blank" href="/hosting/zn/2016/3557.html">[查看详情]</a></p>
</div>
                <div class="xian"></div>
                <ul>
                  <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/hosting/zn/2016/3131.html">20160613 《十运会小型张》等藏品托管公告...</a><span>2016-06-14</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/hosting/zn/2016/3116.html">20160609 藏品《兜兰小全张》托管入库公告...</a><span>2016-06-13</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/hosting/zn/2016/2929.html">20160523 藏品《孔子教育奖封》托管入库公告...</a><span>2016-05-24</span></li>

                </ul>
              </div>
            </div>
            <div class="clear"></div>
          </div>

          <div style="display: none;" class="con_tab_12" id="con_stab_4">
            <div class="ht_pic">
              <div class="ht_pic_left"><img src="{$S_TPL_PATH}img/imgzs.jpg"></div>
              <div class="ht_pic_right">
                <div class="znwjs"> <a target="_blank" href="/review/nj/"><img src="{$S_TPL_PATH}img/nj.jpg"></a> </div>
                <div class="ht_pic_right_top"><a target="_blank" href="/review/nj/2016/0810/3662.html">
                  <h1>华山论剑20160810期</h1>
                  </a>
                  <p>【盘面综述 】 今日南京文交所综合指数上涨0.07%，钱币指数上涨0.51%，邮票指数上涨0.07%，电话卡指数下跌-0.02%，邮资...<a target="_blank" href="/review/nj/2016/0810/3662.html">[查看详情]</a></p>
</div>
                <div class="xian"></div>
                <ul>
                  <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/review/nj/2016/0809/3648.html">华山论剑20160809期...</a><span>2016-08-09</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/review/nj/2016/0808/3633.html">华山论剑20160808期...</a><span>2016-08-08</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/review/nj/2016/0806/3623.html">华山论剑20160806期...</a><span>2016-08-06</span></li>

                </ul>
              </div>
            </div>
            <div class="line"></div>
            <div class="ht_pic">
              <div class="ht_pic_left"><img src="{$S_TPL_PATH}img/imgzs1.jpg"></div>
              <div class="ht_pic_right">
                <div class="znwjs"> <a target="_blank" href="/review/zn/"><img src="{$S_TPL_PATH}img/zn.jpg"></a> </div>
                <div class="ht_pic_right_top"><a target="_blank" href="/review/zn/2016/0811/3673.html">
                  <h1>中南8月10日综述 | 小幅走高，中南止跌回升</h1>
                  </a>
                  <p>周三中南呈现出探底回升的走势，盘中主力做多迹象还是比较明显的，而且各品种表现还算活跃，短线大盘在前期低...<a target="_blank" href="/review/zn/2016/0811/3673.html">[查看详情]</a></p>
</div>
                <div class="xian"></div>
                <ul>
                  <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/review/zn/2016/0810/3660.html">中南邮票交易8月9日行情综述...</a><span>2016-08-10</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/review/zn/2016/0809/3642.html">中南邮票交易8月8日行情综述...</a><span>2016-08-09</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/review/zn/2016/0808/3631.html">【中南】中南邮票交易8月6日行情综述...</a><span>2016-08-08</span></li>

                </ul>
              </div>
            </div>
            <div class="clear"></div>
          </div>

          <div style="display: none;" class="con_tab_12" id="con_stab_5">
            <div class="ht_pic">
              <div class="ht_pic_left"><img src="{$S_TPL_PATH}img/imgzx2.jpg"></div>
              <div class="ht_pic_right">
                <div class="znwjs"><a target="_blank" href="/nanjing/information/"><img src="{$S_TPL_PATH}img/zf.jpg"></a></div>
                <div class="ht_pic_right_top"><a target="_blank" href="/news/2016/3666.html">
                  <h1>邮币卡行业大佬聚会上邮共商发展大计</h1>
                  </a>
                  <p>2016年8月9日 南京文交所 、中南邮票交易中心、南方文交所、中艺邮币卡行业大佬齐聚上邮，共同商议邮币卡市场规范...<a target="_blank" href="/news/2016/3666.html">[查看详情]</a></p>
</div>
                <div class="xian"></div>
                <ul>
                  <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/news/2016/3636.html">2016年南京文交所傲人成绩...</a><span>2016-08-08</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/news/2016/3529.html">袁亚非：我收购南京文交所的最真实原因...</a><span>2016-07-29</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/news/2016/3500.html">转发:宏图参股南京文交所解读...</a><span>2016-07-27</span></li>

                </ul>
              </div>
            </div>
            <div class="line"></div>
            <div class="ht_pic">
              <div class="ht_pic_left"><img src="/img/imgzx3.jpg"></div>
              <div class="ht_pic_right">
                <div class="znwjs"><a target="_blank" href="/zhongnan/information/"><img src="/img/zf.jpg"></a></div>
                <div class="ht_pic_right_top"><a target="_blank" href="/news/2016/3481.html">
                  <h1>中南第四次“投资人”协会代表大会星城召开</h1>
                  </a>
                  <p>2016年7月23日，中南邮票交易中心第四次投资人协会代表大会在长沙召开，会议由投资人协会执行委员会成员王福玉先...<a target="_blank" href="/news/2016/3481.html">[查看详情]</a></p>
 </div>
                <div class="xian"></div>
                <ul>
                  <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/news/2016/3440.html">中南邮票交易中心举办首次摇号活动...</a><span>2016-07-20</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/news/2016/3421.html">南京文交所钱币邮票交易中心投资人协会第三次...</a><span>2016-07-18</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/news/2016/3395.html">南京文交所再传劲爆消息...</a><span>2016-07-14</span></li>

                </ul>
              </div>
            </div>
            <div class="clear"></div>
          </div>

          <div style="display: none;" class="con_tab_12" id="con_stab_6">
            <div class="ht_pic">
              <div class="ht_pic_left"><img src="/img/imgzx.jpg"></div>
              <div class="ht_pic_right">
                <div class="znwjs"><a target="_blank" href="/nanjing/information/"><img src="/img/nj.jpg"></a></div>
                <div class="ht_pic_right_top"><a target="_blank" href="/nanjing/information/2015477.html">
                  <h1>“中国邮币卡业协会筹备委员会”9月7日正式成立</h1>
                  </a>
                  <p>鉴于邮币卡现货线上交易平台快速发展，截止至目前，全国已有30多家交易平台投入运营，正在筹备的有20多家，为了...<a target="_blank" href="/nanjing/information/2015477.html">[查看详情]</a></p>
</div>
                <div class="xian"></div>
                <ul>
                  <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/nanjing/information/201554.html">利好资讯：国有机构“中比基金”入驻南京文交...</a><span>2015-08-10</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/nanjing/information/2015156.html">南京文交所入列文化部国家文化产业项目平台...</a><span>2015-08-08</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/nanjing/information/201551.html">股改尘埃落定 南京文交所邮币卡电子盘地位上升...</a><span>2015-08-07</span></li>

                </ul>
              </div>
            </div>
            <div class="line"></div>
            <div class="ht_pic">
              <div class="ht_pic_left"><img src="/img/imgzx1.jpg"></div>
              <div class="ht_pic_right">
                <div class="znwjs"><a target="_blank" href="/zhongnan/information/"><img src="/img/zn.jpg"></a></div>
                <div class="ht_pic_right_top"><a target="_blank" href="/zhongnan/information/201575.html">
                  <h1>10元错币1980年版估价多少</h1>
                  </a>
                  <p>一张百元错币竟然被估价百万？在看到最近这样一则新闻之后，不少具有错币的市民动心了，南川43岁的周姐便是其中...<a target="_blank" href="/zhongnan/information/201575.html">[查看详情]</a></p>
</div>
                <div class="xian"></div>
                <ul>
                  <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/zhongnan/information/201574.html">民间藏品：援老筑路立功证...</a><span>2015-08-07</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/zhongnan/information/201573.html">粮票收藏的十大误区...</a><span>2015-08-07</span></li>
<li><i>·&nbsp;&nbsp;</i><a target="_blank" href="/zhongnan/information/201572.html">年历珍藏岁月烙印...</a><span>2015-08-07</span></li>

                </ul>
              </div>
            </div>
            <div class="clear"></div>
          </div>

        </div>
        -->
      </div>
    </div>
    <div class="news-right">
      <!-- 开户微信 -->
      <div class="kaihu">
        <ul style=" border-bottom:1px #e0e0e0 solid" id="tab">
          <li class="">快速通道</li>
          <li style="" class="fli"><img alt="立即开户" src="{$S_TPL_PATH}img/ljkh.jpg"></li>
        </ul>
        <div id="tab_con">
          <div class="">
          <img style="margin-top:10px; width:273px; height:59px" class="phone1" src="{$S_TPL_PATH}img/phone1.jpg">
          <big style="text-align:center;width:273px; height:40px; line-height:30px;color:#444444; font-size:15px; width:273px; margin-top:5px;">
          南京文交所：166679921<a target="_blank" href="http://jq.qq.com/?_wv=1027&amp;k=29meoV9"><img alt="加入QQ群" src="{$S_TPL_PATH}img/qqq.jpg"></a>
          </big>
          <big style="text-align:center;width:273px; height:40px; line-height:30px;color:#444444; font-size:15px; width:273px; margin-top:5px;">
          河北文交所：551356405<a target="_blank" href="http://jq.qq.com/?_wv=1027&amp;k=jAIDQP"><img style="vertical-align:middle; margin-left:5px;" alt="加入QQ群" src="{$S_TPL_PATH}img/qqq.jpg"></a></big></div>
          <div class="fdiv">
          <a target="_blank" href="https://kh.zgqbyp.com/SelfOpenAccount/index.jsp?brokerId=2351"><img style="margin-top:18px;height:52px;" src="{$S_TPL_PATH}img/tubiao.png"><span style="font-size:24px; height:52px;vertical-align:50%;">南京文交所</span><span class="mianfei">免费开户</span></a><br>
          <a target="_blank" href="https://kh.zgqbyp.com/SelfOpenAccount/index.jsp?brokerId=2351"><img style="margin-top:20px;height:52px;" src="{$S_TPL_PATH}img/tubiao0.png"><span style="font-size:24px; height:52px;vertical-align:50%;">河北文交所</span><span class="mianfei">免费开户</span></a></div>
		</div>
        <div class="weixin"> <img width="95" height="95" style="margin-right:20px;" src="{$S_TPL_PATH}img/wx.png">
          <div class="zfwj"><b>恒瑞文金</b>
            <p>南京|河北文交所<br>
              第一服务品牌</p>
          </div>
        </div>
      </div>
      <script type="text/javascript"  language="javascript">


</script>
      <!-- 开户微信 -->
      <!-- 文盘学院 -->
      <div class="box demo1">
        <ul class="tab_menu">
          <li class=""><a target="_blank" href="/experience/">经验分享</a></li>
          <li class=""><a href="/market/">行情分析</a></li>
          <li class="current"><a href="/term/">术语介绍</a></li>
        </ul>
        <div class="tab_box">
          <div class="hide"><div class="box_p"><a title="【南京】0926中金综述：板块热" target="_blank" href="/experience/2015753.html"><b>【南京】0926中金综述：板块热</b></a>
              <p>9月26日周六，综合指数上涨41.88点，涨幅0.99%，收盘4283.86点，成交47.65亿元；钱...<a target="_blank" href="/experience/2015753.html">[详情]</a></p>
            </div>

            <ul>
              <li><span>·</span><a target="_blank" title="当前散户操作准则：安全第一" href="/experience/201582.html">当前散户操作准则：安全第一...</a></li>
<li><span>·</span><a target="_blank" title="绝对不要人云亦云轻信“股神" href="/experience/201579.html">绝对不要人云亦云轻信“股神...</a></li>
<li><span>·</span><a target="_blank" title="多数投资者的四种心态" href="/experience/201577.html">多数投资者的四种心态...</a></li>

            </ul>
          </div>
          <div class="hide"><div class="box_p"><a title="【金陵】金陵8月10日综述 | 盘" target="_blank" href="/market/20163677.html"><b>【金陵】金陵8月10日综述 | 盘</b></a>
              <p>综合指数8月10日大涨52.77点，涨幅7.75%，报收734.09点，量比0.88，换手率14.50%，成...<a target="_blank" href="/market/20163677.html">[详情]</a></p>
            </div>

            <ul>
              <li><span>·</span><a target="_blank" title="【南方】南方8月10日综述 | 继" href="/market/20163676.html">【南方】南方8月10日综述 | 继...</a></li>
<li><span>·</span><a target="_blank" title="【天津】天津8月10日综述 | 趋" href="/market/20163675.html">【天津】天津8月10日综述 | 趋...</a></li>
<li><span>·</span><a target="_blank" title="【中艺】中艺8月10日综述 | 高" href="/market/20163674.html">【中艺】中艺8月10日综述 | 高...</a></li>

            </ul>
          </div>
          <div class=""><div class="box_p"><a title="人民币收藏术语介绍" target="_blank" href="/term/2015102.html"><b>人民币收藏术语介绍</b></a>
              <p>虽然人民币收藏介入门槛低，但是也有着大学问，暂且咱们先不谈要有多了解市...<a target="_blank" href="/term/2015102.html">[详情]</a></p>
            </div>

            <ul>
              <li><span>·</span><a target="_blank" title="专业操盘术语" href="/term/201595.html">专业操盘术语...</a></li>
<li><span>·</span><a target="_blank" title="盘面基础术语总览" href="/term/201594.html">盘面基础术语总览...</a></li>
<li><span>·</span><a target="_blank" title="钱币基础术语" href="/term/201592.html">钱币基础术语...</a></li>

            </ul>
          </div>
        </div>
      </div>
      <!-- 文盘学院 -->
    </div>
    <!--通知公告右侧开始 -->
  </div>
  <!--通知公告结束 -->
</div>

<div class="prod">
  <div class="product">
    <div class="prp">
      <div class="pro"><big><a target="_blank" href="/product/">交易品种</a></big></div>
      <div class="more1"><a target="_blank" href="/product/" class="more">+MORE</a></div>
    </div>
    <div class="stepcarousel" id="mygallery">
      <div id="displaycssbelt" class="belt" style="width: 2290px; left: -229px; visibility: visible;"><div class="panel" style="float: none; position: absolute; left: 0px;">
          <div class="subfeature"><a target="_blank" href="/product/yptk/2015/29.html"><img width="174" height="170" class="post-image" alt="602005唐诗小版张" src="{$S_TPL_PATH}img/145K16432-0-lp.jpg"></a>
            <div class="subfeature-txt">
              <h2><a target="_blank" href="/product/yptk/2015/29.html">602005唐诗小版张</a></h2>
            </div>
          </div>
        </div>
<div class="panel" style="float: none; position: absolute; left: 229px;">
          <div class="subfeature"><a target="_blank" href="/product/yzfptk/2015/188.html"><img width="174" height="170" class="post-image" alt="605006舟山桃花岛片" src="{$S_TPL_PATH}img/1J53433W-0-lp.jpg"></a>
            <div class="subfeature-txt">
              <h2><a target="_blank" href="/product/yzfptk/2015/188.html">605006舟山桃花岛片</a></h2>
            </div>
          </div>
        </div>
<div class="panel" style="float: none; position: absolute; left: 458px;">
          <div class="subfeature"><a target="_blank" href="/product/yzfptk/2015/187.html"><img width="174" height="170" class="post-image" alt="605005山东风光本片" src="{$S_TPL_PATH}img/1J3054P5-0-lp.jpg"></a>
            <div class="subfeature-txt">
              <h2><a target="_blank" href="/product/yzfptk/2015/187.html">605005山东风光本片</a></h2>
            </div>
          </div>
        </div>
<div class="panel" style="float: none; position: absolute; left: 687px;">
          <div class="subfeature"><a target="_blank" href="/product/yzfptk/2015/186.html"><img width="174" height="170" class="post-image" alt="605004亚洲杯邮资片" src="{$S_TPL_PATH}img/1I93J141-0-lp.jpg"></a>
            <div class="subfeature-txt">
              <h2><a target="_blank" href="/product/yzfptk/2015/186.html">605004亚洲杯邮资片</a></h2>
            </div>
          </div>
        </div>
<div class="panel" style="float: none; position: absolute; left: 916px;">
          <div class="subfeature"><a target="_blank" href="/product/yzfptk/2015/185.html"><img width="174" height="170" class="post-image" alt="605003爱心错片" src="{$S_TPL_PATH}img/1IGGI8-0-lp.jpg"></a>
            <div class="subfeature-txt">
              <h2><a target="_blank" href="/product/yzfptk/2015/185.html">605003爱心错片</a></h2>
            </div>
          </div>
        </div>
<div class="panel" style="float: none; position: absolute; left: 1145px;">
          <div class="subfeature"><a target="_blank" href="/product/yzfptk/2015/184.html"><img width="174" height="170" class="post-image" alt="605002物理年邮资片" src="{$S_TPL_PATH}img/1I43M300-0-lp.jpg"></a>
            <div class="subfeature-txt">
              <h2><a target="_blank" href="/product/yzfptk/2015/184.html">605002物理年邮资片</a></h2>
            </div>
          </div>
        </div>
<div class="panel" style="float: none; position: absolute; left: 1374px;">
          <div class="subfeature"><a target="_blank" href="/product/qbtk/2015/183.html"><img width="174" height="170" class="post-image" alt="503001建国钞百连" src="{$S_TPL_PATH}img/1I0044252-0-lp.jpg"></a>
            <div class="subfeature-txt">
              <h2><a target="_blank" href="/product/qbtk/2015/183.html">503001建国钞百连</a></h2>
            </div>
          </div>
        </div>
<div class="panel" style="float: none; position: absolute; left: 1603px;">
          <div class="subfeature"><a target="_blank" href="/product/qbtk/2015/182.html"><img width="174" height="170" class="post-image" alt="502001 811长城币" src="{$S_TPL_PATH}img/1-150PQHA2225-lp.jpg"></a>
            <div class="subfeature-txt">
              <h2><a target="_blank" href="/product/qbtk/2015/182.html">502001 811长城币</a></h2>
            </div>
          </div>
        </div>
<div class="panel" style="float: none; position: absolute; left: 1832px;">
          <div class="subfeature"><a target="_blank" href="/product/qbtk/2015/181.html"><img width="174" height="170" class="post-image" alt="501003三版三冠贰角" src="{$S_TPL_PATH}img/1-150PQH31B12-lp.jpg"></a>
            <div class="subfeature-txt">
              <h2><a target="_blank" href="/product/qbtk/2015/181.html">501003三版三冠贰角</a></h2>
            </div>
          </div>
        </div>
<div class="panel" style="float: none; position: absolute; left: 2061px;">
          <div class="subfeature"><a target="_blank" href="/product/qbtk/2015/180.html"><img width="174" height="170" class="post-image" alt="501002红三凸壹角券" src="{$S_TPL_PATH}img/1-150PQH0015Z-lp.jpg"></a>
            <div class="subfeature-txt">
              <h2><a target="_blank" href="/product/qbtk/2015/180.html">501002红三凸壹角券</a></h2>
            </div>
          </div>
        </div>
 </div>
    </div>
  </div>
</div>
