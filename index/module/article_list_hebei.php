<?php
function module_article_list_hebei()
{
	global $smarty;
	$obj = new cat_art();
//	$obj->set_where('cat_best = 1');
	$obj->set_where('cat_index = 2');
	$best_cat = $obj->get_list();
	$art_list = array();
	if(count($best_cat) > 0)
	{
		$smarty->assign('show_all_art',0);
		$list_len = get_varia('index_art_list_len');
		for($i = 0; $i < count($best_cat); $i ++)
		{
			$cat_id = $best_cat[$i]['cat_id'];
                        $str = $best_cat[$i]['cat_name'];
                        $arr=explode('-',$str);
			$best_cat[$i]['cat_name'] = $arr[0];
			$best_cat[$i]['channel'] = get_data('channel',$best_cat[$i]['cat_channel_id'],'cha_code');
//			$family = implode(',',get_cat_family('cat_art',$cat_id));
			$obj = new article();
			$obj->set_field('art_id,art_title,art_add_time,art_cat_id,art_description');
//			$obj->set_where("art_cat_id in ($family)");
			$obj->set_where('art_cat_id = '.$cat_id);
			$obj->set_page_size($list_len ? $list_len : 9);
			$list = $obj->get_list();
			
			for($j = 0; $j < count($list); $j ++)
			{
				$list[$j]['short_title'] = cut_str($list[$j]['art_title'],15);
				
				if($j == 0){
					$list[$j]['show_desc'] = 1;
					$list[$j]['short_desc'] = cut_str($list[$j]['art_description'],55);
				}else{
					$list[$j]['show_desc'] = 0;
				}
					
			}
			$art_list[$cat_id] = $list;
			unset($obj);
		}
		$smarty->assign('best_art_cat',$best_cat);
		$smarty->assign('art_list',$art_list);
	}else{
		$smarty->assign('show_all_art',1);
	}
}
//新秀
?>
