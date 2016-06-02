{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>友情链接</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>名称</td>
				<td width="250px">标签</td>
				<td width="120px">{$lang.operate}</td>
			</tr>
			{foreach from=$advert name=advert item=item}
			<tr>
				<td>{$item.adv_name}</td>
				<td>{ldelim}run module='ad' id='{$item.adv_id}'{rdelim}</td>
				<td>
					<a onClick="jump('{url channel=$global.channel mod='advert_edit' id=$item.adv_id}')">[{$lang.edit}]</a>
					<a onClick="del('advert|{$item.adv_id}')">[{$lang.delete}]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="3">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='advert_add'}')" value="{$lang.add}" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>{$lang.help}</span></div>
	<div class="main content">
                1、系统原有广告位建议只修改不删除，以免删除后不知道如何添加；<br />
		2、如果您不懂代码，在修改官方默认广告代码时，建议只把代码中间的中文替换成您的广告代码，保留首尾代码；<br />
                3、添加广告后复制标签插入到模板文件中，用户须要会点HTML基础；<br />
                4、针对恒瑞提供如下式例代码,管理员只需要按照此代码替换图片路径与链接路径。<br />
                <TEXTAREA  rows=20 cols=120>
                <li>
                        <a title="“金色五月，金羊贺喜”开户交易有礼活动通知" target="_blank" href="http://www.chaoyoubi.com/xxgg/ps/1013.html">
                                <img alt="“金色五月，金羊贺喜”开户交易有礼活动通知" src="http://www.chaoyoubi.com/uploads/160518/1-16051R24JL30.jpg">
                                <span>金色五月，金羊贺喜”开户交易有礼活动通知</span>
                        </ a>
                </li>
                <li>
                        <a title="“开户需要准备哪些材料？" target="_blank" href="http://www.chaoyoubi.com/rszn/431.html">
                                <img alt="“开户需要准备哪些材料？" src="http://www.chaoyoubi.com/uploads/160309/1-160309205420310.jpg">
                                <span>开户需要准备哪些材料？</span>
                        </ a>
                </li>
                <li>
                        <a title="“南方文交所开户流程介绍" target="_blank" href="http://www.chaoyoubi.com/plus/view.php?aid=442">
                                <img alt="“南方文交所开户流程介绍" src="http://www.chaoyoubi.com/uploads/allimg/160114/1-1601142129460-L.jpg">
                                <span>南方文交所开户流程介绍</span>
                        </ a>
                </li>
                </TEXTAREA>
	</div>
</div>
