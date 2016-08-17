{*<?php exit();?>*}
<div class="pos">
	<div class="ps_1200">
		<img src="{$S_TPL_PATH}img/pos.png">&nbsp;&nbsp;你的位置: <a href="/">恒瑞文金</a> &gt; <a href="?/hebei/">河北文交所</a>
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
				{foreach from=$best_art_cat name=best_art_cat item=cat}
				{if $smarty.foreach.best_art_cat.index ==0}
				<div class="con_tab_12" style="display: block;">
					{else}
					<div class="con_tab_12" style="display: none;">
						{/if}
						<div class="ht_pic">
							<div class="ht_pic_left"><img width="180" height="105" src="{$S_TPL_PATH}img/0ZF31096-0-lp.png">
							</div>
							{foreach from=$art_list[$cat.cat_id] name=art_list item=item}
							{if $smarty.foreach.art_list.index ==0}
							<div class="ht_pic_right">
								<div class="ht_pic_right_top">
									<a href="{url channel=$cat.channel id=$item.art_id}">
										<h1>{$item.short_title}</h1>
									</a>
									<p>{$item.art_description}<a href="{url channel=$cat.channel id=$item.art_id}">[查看详情]</a></p>
								</div>
							</div>
							{/if}
							{/foreach}
							<div class="xian"></div>
							<div class="liebiao">
								<ul>
									{foreach from=$art_list[$cat.cat_id] name=art_list item=item}
									{if $smarty.foreach.art_list.index !=0}
									<li><i><img src="{$S_TPL_PATH}img/li.png">&nbsp;&nbsp;</i><a href="{url channel=$cat.channel id=$item.art_id}">{$item.short_title}</a><span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span></li>
									{/if}
									{/foreach}
								</ul>
							</div>
						</div>
					</div>
					{/foreach}
				</div>
			</div>
			<!-- 通知公告&资讯 -->
			<!--联系我们 -->
			<div class="contact">
				<div style="font-size:20px; margin-bottom:20px">联系我们<i style="font-size:15px; color:#CCC">Contact US</i><span style="float:right"><a style="font-size:15px" class="red" href="/about/contact/">+MORE</a></span></div>
				<div class="zfwjwx"><img src="{$S_TPL_PATH}img/zfwj.jpg"></div>
				<div class="zfwjwx"><img border="0" usemap="#Map" src="{$S_TPL_PATH}img/lxfs.png">
					<map id="Map" name="Map">
						<area href="tencent://message/?uin=3270541268&Site" coords="5,28,93,53" shape="rect">
					</map>
				</div>
				<div class="dizhi"> </div>
			</div>
			<!--联系我们 -->
		</div>
	</div>