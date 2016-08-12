<?php
function module_article_list()
{
	global $smarty;
	$obj = new cat_art();
	$obj->set_where('cat_best = 1');
	$best_cat = $obj->get_list();
	$art_list_nj = array();
	$art_list_hb = array();
	if(count($best_cat) > 0)
	{
		$smarty->assign('show_all_art',0);
		$list_len = get_varia('index_art_list_len');
		for($i = 0; $i < count($best_cat); $i ++)
		{
			$cat_id = $best_cat[$i]['cat_id'];
			$best_cat[$i]['channel'] = get_data('channel',$best_cat[$i]['cat_channel_id'],'cha_code');
			
			$obj = new cat_art();
			$obj->set_where('cat_parent_id = '.$best_cat[$i]['cat_id']);
			$sub_cat = $obj->get_list();
			unset($obj);
			for($j = 0; $j < count($sub_cat); $j ++){

					$obj = new article();
					$obj->set_field('art_id,art_title,art_add_time,art_cat_id,art_description');
					$obj->set_where("art_cat_id = ".$sub_cat[$j]['cat_id']);
					$obj->set_page_size($list_len ? $list_len : 4);
					$list = $obj->get_list();
					for($k = 0; $k < count($list); $k ++)
					{
						$list[$k]['short_title'] = cut_str($list[$k]['art_title'],15);
						if($k == 0){
							$list[$k]['show_desc'] = 1;
							$list[$k]['short_desc'] = cut_str($list[$k]['art_description'],55);
						}else{
							$list[$k]['show_desc'] = 0;
						}
					}
					if($sub_cat[$j]['cat_index'] == 1){
						$best_cat[$i]['channel_nj'] = get_data('channel',$sub_cat[$j]['cat_channel_id'],'cha_code');
						$art_list_nj[$cat_id] = $list;
					}else if($sub_cat[$j]['cat_index'] == 2){
						$best_cat[$i]['channel_hb'] = get_data('channel',$sub_cat[$j]['cat_channel_id'],'cha_code');
						$art_list_hb[$cat_id] = $list;
					}
					unset($obj);
			}

		}
		$smarty->assign('best_art_cat',$best_cat);
		$smarty->assign('art_list_nj',$art_list_nj);
		$smarty->assign('art_list_hb',$art_list_hb);
	}else{
		$smarty->assign('show_all_art',1);
	}
}
//新秀
?>