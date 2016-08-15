<!--<div class="sub_left_sider_bar">
  <h2 class="sider_title"><span>{$cat_name}</span></h2>
  <ul class="nav_item">
	{foreach from=$cat_list name=cat_list item=item}
	  <li><a href="{url channel=$item.channel cat=$item.cat_id}"><i class="am-icon-angle-double-right"></i>{$item.short_title}</a></li>
	{/foreach}
  </ul>
</div>-->

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
                    <li class="li_b"><a href="https://kh.zgqbyp.com/SelfOpenAccount/index.jsp?brokerId=2351">河北文交所开户中心</a></li>
                </ul>
            </div>

            <!-- 下载中心 -->
            <div class="kaihu">
                <div id="tab_con">
                    <div class="fdiv wx">
                        <img style="margin-top:10px; width:273px; height:59px" class="phone1" src="{$S_TPL_PATH}img/phone1.jpg">
                        <p style="text-align:center;width:273px; height:40px; line-height:30px;color:#444444; font-size:15px; width:273px; margin-top:5px;">
                            南京文交所：166679921&nbsp;<a target="_blank" href="http://jq.qq.com/?_wv=1027&amp;k=29meoV9">
                            <img style="vertical-align: middle" alt="加入QQ群" src="{$S_TPL_PATH}img/qqq.jpg"></a>
                        </p>
                        <big style="text-align:center;width:273px; height:40px; line-height:30px;color:#444444; font-size:15px; width:273px; margin-top:5px;">
                            河北文交所：551356405<a target="_blank" href="http://jq.qq.com/?_wv=1027&amp;k=jAIDQP">
                            <img style="vertical-align:middle; margin-left:5px;" alt="加入QQ群" src="{$S_TPL_PATH}img/qqq.jpg"></a></big>
                    </div>
                </div>

                <div class="weixin"> <img width="95" height="95" style="margin-right:20px;" src="{$S_TPL_PATH}img/wx.png">
                    <div class="zfwj"><b>恒瑞文金</b>
                        <p>南京|河北文交所<br>
                            第一服务品牌</p>
                    </div>
                </div>
            </div>

            <!-- 开户微信 -->
        </div>
        <!--左侧结束 -->
        <!--右侧开始 -->
        <if class="right">
            {if $show_sheet == 1}
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
                    <div class="jiathis_style">
                        <span class="jiathis_txt">分享到：</span>
                        <a class="jiathis_button_tools_1" title="分享到QQ空间"><span class="jiathis_txt jiathis_separator jtico jtico_qzone">QQ空间</span></a>
                        <a class="jiathis_button_tools_2" title="分享到微博"><span class="jiathis_txt jiathis_separator jtico jtico_tsina">微博</span></a>
                        <a class="jiathis_button_tools_3" title="分享到腾讯微博"><span class="jiathis_txt jiathis_separator jtico jtico_tqq">腾讯微博</span></a>
                        <a class="jiathis_button_tools_4" title="分享到微信"><span class="jiathis_txt jiathis_separator jtico jtico_weixin">微信</span></a>
                        <a class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" href="http://www.jiathis.com/share">更多</a>
                        <a class="jiathis_counter_style"><span class="jiathis_button_expanded jiathis_counter jiathis_bubble_style" id="jiathis_counter_35" title="累计分享0次">0</span></a>
                    </div><br>
                    <script charset="utf-8" src="http://v3.jiathis.com/code/jia.js" type="text/javascript"></script><script charset="utf-8" src="http://v3.jiathis.com/code/plugin.client.js" type="text/javascript"></script>
                    <!-- JiaThis Button END -->

                </div>
                <div class="fenye">
                    <ul>
                        <li>上一篇：没有了 </li>
                        <li>下一篇：<a href="/nanjing/information/2015156.html">南京文交所入列文化部国家文化产业项目平台</a> </li>
                    </ul>
                </div>
            </div>
            {/if}
        </div>
        <!--右侧结束 -->
    </div>
</div>