<?php
function module_cat_list($par)
{
	global $smarty;
	$cat_name = get_data('cat_art',$par['id'],'cat_name');
	$smarty->assign('cat_name',$cat_name);
	
	$obj = new cat_art();
	$obj->set_field('cat_id,cat_parent_id,cat_channel_id,cat_name');
	$obj->set_where('cat_parent_id = '.$par['id']);
	$list = $obj->get_list();
	for($i = 0; $i < count($list); $i ++)
	{
		$list[$i]['channel'] = get_data('channel',$list[$i]['cat_channel_id'],'cha_code');
		$list[$i]['short_title'] = cut_str($list[$i]['cat_name'],6);
	}
	$smarty->assign('cat_list',$list);
}

//新秀
?>