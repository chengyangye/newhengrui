<?php
function module_pic_list()
{
	global $smarty;
	$obj = new cat_art();
	$obj->set_where('cat_top = 1');
	$pic_cat = $obj->get_list();
	$art_list = array();

	if(count($pic_cat) > 0)
	{
		$smarty->assign('show_all_art',0);
		$list_len = get_varia('index_art_list_len');
		for($i = 0; $i < count($pic_cat); $i ++)
		{
			$cat_id = $pic_cat[$i]['cat_id'];
			$pic_cat[$i]['channel'] = get_data('channel',$pic_cat[$i]['cat_channel_id'],'cha_code');
			
			$family = implode(',',get_cat_family('cat_art',$cat_id));
			$obj = new article();
			$obj->set_field('art_id,art_title,art_cat_id,art_img');
			$obj->set_where("art_cat_id in ($family)");
			$obj->set_page_size($list_len ? $list_len : 5);
			$list = $obj->get_list();
			
			for($j = 0; $j < count($list); $j ++)
			{
				$list[$j]['short_title'] = cut_str($list[$j]['art_title'],22);
					
			}
			$art_list[$cat_id] = $list;
			echo count($art_list[$cat_id]);
			unset($obj);
		}
		$smarty->assign('best_art_cat',$pic_cat);
		$smarty->assign('art_list',$art_list);

	}else{
		$smarty->assign('show_all_art',1);
	}
}
//新秀
?>