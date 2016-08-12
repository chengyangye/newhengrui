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
			$family = implode(',',get_cat_family('cat_art',$cat_id));
			$obj = new article();
			$obj->set_field('art_id,art_title,art_add_time,art_cat_id');
			$obj->set_where("art_cat_id in ($family)");
			$obj->set_page_size($list_len ? $list_len : 5);
			$list = $obj->get_list();
			
			$list_nj = array();
			$list_hb = array();
			for($j = 0; $j < count($list); $j ++)
			{
				$list[$j]['short_title'] = cut_str($list[$j]['art_title'],22);
				
					$cat_parent_id = get_data('cat_art',$list[$j]['art_cat_id'],'cat_parent_id');
					if($cat_parent_id!=0){
						$list[$j]['cat_name'] = get_data('cat_art',$list[$j]['art_cat_id'],'cat_name')." : ";
					}else{
						$list[$j]['cat_name'] = "";
					}
					if($best_cat[$i]['cat_index']==1){
						array_push($list_nj, $list[$j]);
					}else{
						array_push($list_hb, $list[$j]);
					}
					
			}
			$art_list_nj[$cat_id] = $list_nj;
			$art_list_hb[$cat_id] = $list_hb;
			unset($obj);
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