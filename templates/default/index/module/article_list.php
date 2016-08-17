{*<?php exit();?>*}
<div class="tz">
  <!--通知公告开始 -->
  <div class="news">
    <!--通知公告左侧开始 -->
    <div class="news-left">
      <div class="h_tab">
        <div id="table_2" class="tab_l">
            {foreach from=$best_art_cat name=best_art_cat item=cat}
                {if $smarty.foreach.best_art_cat.index ==0}
                    <div><a target="_blank" class="thover" href="{url channel=$cat.channel cat=$cat.cat_id}" >{$cat.cat_name}</a></div>
                {else}
                    <div><a target="_blank" class="" href="{url channel=$cat.channel cat=$cat.cat_id}">{$cat.cat_name}</a></div>
                {/if}

            {/foreach}
          <!--<div id="stab1"><a target="_blank" class="" href="/notice/" class="thover">通知公告</a></div>-->
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
            {foreach from=$best_art_cat name=best_art_cat item=cat}
            {if $smarty.foreach.best_art_cat.index ==0}
                <div class="con_tab_12" style="display: block;">
                {else}
                <div class="con_tab_12" style="display: none;">
             {/if}
                <div class="ht_pic">
                    <div class="ht_pic_left">

                        <img src="{$S_TPL_PATH}img/imgtztop{$smarty.foreach.best_art_cat.index}.jpg">

                    </div>
                    <div class="ht_pic_right">
                        <div class="znwjs"><a target="_blank" href="{url channel=$cat.channel cat=$cat.cat_id_nj}"><img src="{$S_TPL_PATH}img/nj.jpg"></a></div>
                        {foreach from=$art_list_nj[$cat.cat_id] name=art_list_nj item=item}
                            {if $smarty.foreach.art_list_nj.index ==0}
                            <div class="ht_pic_right_top"><a target="_blank" href="{url channel=$cat.channel id=$item.art_id}">
                                <h1>{$item.short_title}</h1>
                            </a>
                                <p>{$item.art_description}<a target="_blank" href="{url channel=$cat.channel id=$item.art_id}">[查看详情]</a></p>
                            </div>
                            {/if}
                        {/foreach}

                        <div class="xian"></div>
                        <ul>
                            {foreach from=$art_list_nj[$cat.cat_id] name=art_list_nj item=item}
                                {if $smarty.foreach.art_list_nj.index !=0}
                                <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="{url channel=$cat.channel id=$item.art_id}">{$item.short_title}</a><span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span></li>
                                {/if}
                            {/foreach}

                        </ul>
                    </div>
                </div>
                <div class="line"></div>
                <div class="ht_pic">
                    <div class="ht_pic_left"><img src="{$S_TPL_PATH}img/imgtzfooter{$smarty.foreach.best_art_cat.index}.jpg"></div>
                    <div class="ht_pic_right">
                        <div class="znwjs"><a target="_blank" href="{url channel=$cat.channel cat=$cat.cat_id_hb}"><img src="{$S_TPL_PATH}img/zn.jpg"></a></div>
                        {foreach from=$art_list_hb[$cat.cat_id] name=art_list_hb item=item}
                        {if $smarty.foreach.art_list_hb.index ==0}
                        <div class="ht_pic_right_top"><a target="_blank" href="{url channel=$cat.channel id=$item.art_id}">
                            <h1>{$item.short_title}</h1>
                        </a>
                            <p>{$item.art_description}<a target="_blank" href="{url channel=$cat.channel id=$item.art_id}">[查看详情]</a></p>
                        </div>
                        {/if}
                        {/foreach}
                        <div class="xian"></div>
                        <ul>
                            {foreach from=$art_list_hb[$cat.cat_id] name=art_list_hb item=item}
                            {if $smarty.foreach.art_list_hb.index !=0}
                            <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="{url channel=$cat.channel id=$item.art_id}">{$item.short_title}</a><span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span></li>
                            {/if}
                            {/foreach}

                        </ul>
                    </div>
                </div>
            </div>
            {/foreach}

        </div>
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
          南京文交所：<a href="tencent://message/?uin=3244603778&Site">3244603778 </a>
              <a target="_blank" href="tencent://message/?uin=3244603778&Site"><img style="vertical-align: middle;width: 85px;" alt="在线咨询" src="{$S_TPL_PATH}img/qqq.jpg"></a>
          </big>
          <big style="text-align:center;width:273px; height:40px; line-height:30px;color:#444444; font-size:15px; width:273px; margin-top:5px;">
          河北文交所：<a href="tencent://message/?uin=3270541268&Site">3270541268 </a><a target="_blank" href="tencent://message/?uin=3270541268&Site"><img style="vertical-align: middle;width: 85px;" alt="在线咨询" src="{$S_TPL_PATH}img/qqq.jpg"></a></big></div>
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
    </div>
  </div>
</div>
    </div>
