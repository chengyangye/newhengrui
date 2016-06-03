<?php
function module_cat_list($par)
{
	global $smarty;
	$cat_name = get_data('cat_art',$par['id'],'cat_name');
	$cat_parent_id = get_data('cat_art',$par['id'],'cat_parent_id');
	$smarty->assign('cat_name',$cat_name);
	
	$obj = new cat_art();
	$obj->set_field('cat_id,cat_parent_id,cat_channel_id,cat_name');
	$obj->set_where('cat_parent_id = '.$par['id']);
	$obj->set_where('cat_show = 1');
	$list = $obj->get_list();
	if(count($list)>0){
		for($i = 0; $i < count($list); $i ++)
		{
			$list[$i]['channel'] = get_data('channel',$list[$i]['cat_channel_id'],'cha_code');
			$list[$i]['short_title'] = cut_str($list[$i]['cat_name'],6);
		}
		$smarty->assign('cat_list',$list);
	}else{
		$parent_obj = new cat_art();
		$parent_obj->set_field('cat_id,cat_parent_id,cat_channel_id,cat_name');
		$parent_obj->set_where('cat_parent_id = '.$cat_parent_id);
		$parent_obj->set_where('cat_show = 1');
		$parent_obj->set_where('cat_best = 1');
		$parent_list = $parent_obj->get_list();
		
		for($i = 0; $i < count($parent_list); $i ++)
		{
			{
				$parent_list[$i]['channel'] = get_data('channel',$parent_list[$i]['cat_channel_id'],'cha_code');
				$parent_list[$i]['short_title'] = cut_str($parent_list[$i]['cat_name'],6);
			}
		}
		$smarty->assign('cat_list',$parent_list);
	}
}

//新秀
?>