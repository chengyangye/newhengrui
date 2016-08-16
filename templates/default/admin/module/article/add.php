{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.add_article}</span></div>
	<div class="main">
		<form id="form_add_art" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_or_edit_article" />
			<table class="table">
				<tr>
					<td width="100px">{$lang.article_title}：</td>
					<td><input name="art_title" type="text" class="text" maxlength="200" value="" /></td>
				</tr>
				<tr>
					<td>{$lang.article_cat}：</td>
					<td>
						<select name="art_cat_id">
							<option value="0">{$lang.please_select}</option>
							{foreach from=$cat_list name=cat_list item=item}
							<option value="{$item.cat_id}">{section name=loop loop=$item.grade - 1}&nbsp;{/section}{$item.cat_name}</option>
							{/foreach}
						</select>
					</td>
				</tr>
				<tr>
					<td>{$lang.author}：</td>
					<td><input name="art_author" type="text" class="text" maxlength="" value="" /></td>
				</tr>
				<tr>
					<td>{$lang.article_text}：</td>
					<td>
						<div class="editor">
							{include file='module/editor.php'}
						</div>
					</td>
				</tr>
				<tr>
					<td>{$lang.keywords}：</td>
					<td><input class="text" name="art_keywords" type="text" maxlength="200" value="{$site_keywords}" />
					</td>
				</tr>
				<tr>
					<td>{$lang.description}：</td>
					<td>
						<a>请在此处填写您的文章摘要，此处内容会在界面上文章摘要中显示！！！请勿随意填写！！！</a><br>
						<input class="text" name="art_description" type="text" value="{$site_description}" />
					</td>
				</tr>
                                <tr>
                                        <td>{$lang.art_pic}：</td>
                                        <td>
                                                <a>如需要配图,请在"文件管理"->"图片管理"中上传图片,并粘贴图片地址至此.</a><br>
                                                <input class="text" name="art_img" type="text" value="{$site_img}" />
                                        </td>
                                </tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="{$lang.submit}" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
