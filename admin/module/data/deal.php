<?php
function edit_data_user()
{
	global $smarty;
	$data_username = post('data_username');
	$data_password = post('data_password');
	
	$obj = new varia();
	$obj->edit_var_value('data_username',$data_username);
	$obj->edit_var_value('data_password',$data_password);
	
	$smarty->assign('info_text','修改采集帐号信息成功');
	$smarty->assign('link_text','返回上一页');
	$smarty->assign('link_href',url(array('channel'=>'data','mod'=>'set')));
}
function edit_data_cat()
{
	global $smarty;
	
	$obj = new varia();
	$obj->set_where("var_name = 'data_cat'");
	$list = $obj->get_list();
	
	for($i = 0; $i < count($_POST['varia_id']); $i ++)
	{
		$varia_id = strict($_POST['varia_id'][$i]);
		$data_channel = strict($_POST['data_channel'][$i]);
		$data_cat = strict($_POST['data_cat'][$i]);
		for($j = 0; $j < count($list); $j ++)
		{
			if($list[$j]['var_id'] == $varia_id)
			{
				$arr = explode('|',$list[$j]['var_value']);
				if($arr[2] != $data_channel || $arr[3] != $data_cat)
				{
					$val = $arr[0] . '|' . $arr[1] . '|' . $data_channel . '|' . $data_cat;
					$obj = new varia();
					$obj->set_value('var_value',$val);
					$obj->set_where('var_id = ' . $varia_id);
					$obj->edit();
				}
				break;
			}
		}
	}
	
	$smarty->assign('info_text','修改分类设置成功');
	$smarty->assign('link_text','返回上一页');
	$smarty->assign('link_href',url(array('channel'=>'data','mod'=>'set')));
}
function add_tailor_cat()
{
	global $smarty;
	
	$server_id = post('server_id');
	$server_name = post('server_name');
	$data_channel = post('data_channel');
	$data_cat = post('data_cat');
	
	if(is_numeric($server_id) && is_numeric($data_channel) && is_numeric($data_cat))
	{
		$val = $server_id . '|' . $server_name . '|' . $data_channel . '|' . $data_cat;
		$obj = new varia();
		$obj->set_value('var_name','tailor_data_cat');
		$obj->set_value('var_value',$val);
		$obj->add();
		
		$info_text = '修改分类设置成功';
	}else{
		$info_text = '对不起，您所提交的数据有误';
	}
	
	$smarty->assign('info_text',$info_text);
	$smarty->assign('link_text','返回列表页');
	$smarty->assign('link_href',url(array('channel'=>'data','mod'=>'tailor_set')));
}
function edit_tailor_cat()
{
	global $smarty;
	
	$obj = new varia();
	$obj->set_where("var_name = 'tailor_data_cat'");
	$list = $obj->get_list();
	
	for($i = 0; $i < count($_POST['varia_id']); $i ++)
	{
		$varia_id = strict($_POST['varia_id'][$i]);
		$data_channel = strict($_POST['data_channel'][$i]);
		$data_cat = strict($_POST['data_cat'][$i]);
		for($j = 0; $j < count($list); $j ++)
		{
			if($list[$j]['var_id'] == $varia_id)
			{
				$arr = explode('|',$list[$j]['var_value']);
				if($arr[2] != $data_channel || $arr[3] != $data_cat)
				{
					$val = $arr[0] . '|' . $arr[1] . '|' . $data_channel . '|' . $data_cat;
					$obj = new varia();
					$obj->set_value('var_value',$val);
					$obj->set_where('var_id = ' . $varia_id);
					$obj->edit();
				}
				break;
			}
		}
	}
	
	$smarty->assign('info_text','修改分类设置成功');
	$smarty->assign('link_text','返回上一页');
	$smarty->assign('link_href',url(array('channel'=>'data','mod'=>'tailor_set')));
}
function do_gather()
{
	$id = post('id');
	
	$data_username = rawurlencode(get_varia('data_username'));
	$data_password = rawurlencode(get_varia('data_password'));
	
	$url = S_SERVER_URL . '?/data/id-' . $id . '/data_username-' . $data_username . '/data_password-' . $data_password . '/index.html';
	
	$str = file_get_contents($url);
	$result = json_decode(rawurldecode($str),true);
	if(is_array($result))
	{
		if($result['error'] == 0)
		{
			$one = $result['one'];
			$local_channel_id = 0;
			$local_cat_id = 0;
			
			$obj = new varia();
			$obj->set_where("var_name = 'data_cat'");
			$list = $obj->get_list();
			for($i = 0; $i < count($list); $i ++)
			{
				$arr = explode('|',$list[$i]['var_value']);
				if($arr[0] == $one['art_cat_id'])
				{
					$local_channel_id = $arr[2];
					$local_cat_id = $arr[3];
					break;
				}
			}
			
			if($local_channel_id != 0 && $local_cat_id != 0)
			{
				$site_keywords = get_varia('site_keywords');
				$site_description = get_varia('site_description');
				
				$obj = new article();
				$obj->set_value('art_title',$one['art_title']);
				$obj->set_value('art_channel_id',$local_channel_id);
				$obj->set_value('art_lang',S_LANG);
				$obj->set_value('art_cat_id',$local_cat_id);
				$obj->set_value('art_author',$one['art_author']);
				$obj->set_value('art_text',$one['art_text']);
				$obj->set_value('art_keywords',$site_keywords);
				$obj->set_value('art_description',$site_description);
				$obj->set_value('art_add_time',time());
				$obj->add();
				echo 1;
			}else{
				echo 2;
			}
		}elseif($result['error'] == 1){
			echo 3; //没有帐号
		}elseif($result['error'] == 2){	
			echo 4; //帐号错误
		}elseif($result['error'] == 3){	
			echo 5; //普通会员每天只能采集5条数据
		}elseif($result['error'] == 4){	
			echo 6; //高级会员每天只能采集100条数据
		}elseif($result['error'] == 5){	
			echo 7; //帐号异常
		}
	}else{
		echo 0;
	}
}
function do_gather_tailor()
{
	$id = post('id');
	
	$data_username = rawurlencode(get_varia('data_username'));
	$data_password = rawurlencode(get_varia('data_password'));
	
	$url = S_SERVER_URL . 'tailor.php?/tailor/id-' . $id . '/data_username-' . $data_username . '/data_password-' . $data_password . '/index.html';
	
	$str = file_get_contents($url);
	$result = json_decode(rawurldecode($str),true);
	if(is_array($result))
	{
		if($result['error'] == 'no')
		{
			$one = $result['one'];
			$local_channel_id = 0;
			$local_cat_id = 0;
			
			$obj = new varia();
			$obj->set_where("var_name = 'tailor_data_cat'");
			$list = $obj->get_list();
			for($i = 0; $i < count($list); $i ++)
			{
				$arr = explode('|',$list[$i]['var_value']);
				if($arr[0] == $one['art_cat_id'])
				{
					$local_channel_id = $arr[2];
					$local_cat_id = $arr[3];
					break;
				}
			}
			
			if($local_channel_id == 0){$local_channel_id = 1;}
			
			$site_keywords = get_varia('site_keywords');
			$site_description = get_varia('site_description');
			
			$obj = new article();
			$obj->set_value('art_title',$one['art_title']);
			$obj->set_value('art_channel_id',$local_channel_id);
			$obj->set_value('art_lang',S_LANG);
			$obj->set_value('art_cat_id',$local_cat_id);
			$obj->set_value('art_author',$one['art_author']);
			$obj->set_value('art_text',$one['art_text']);
			$obj->set_value('art_keywords',$site_keywords);
			$obj->set_value('art_description',$site_description);
			$obj->set_value('art_add_time',time());
			$obj->add();
			echo 1;
		}else{
			echo $result['error'];
		}
	}else{
		echo 0;
	}
}
function free_trial()
{
	global $smarty;
	
	$trial_site = post('trial_site');
	$trial_cats = post('trial_cats');
	$trial_email = post('trial_email');
	
	if($trial_site != '' && $trial_cats != '' && $trial_email != '')
	{
		$text = $trial_site . '{v}' . $trial_cats . '{v}' . $trial_email;
		$text = rawurlencode($text);
		
		$data_username = rawurlencode(get_varia('data_username'));
		$data_password = rawurlencode(get_varia('data_password'));
		
		if($data_username != '' && $data_password != '')
		{
			$url = S_SERVER_URL . '?/tailor/action-free_trial/trial_info-' . $text . '/data_username-' . $data_username . '/data_password-' . $data_password . '/index.html';
		
			$str = file_get_contents($url);
			$result = json_decode(rawurldecode($str),true);
			if(is_array($result))
			{
				if($result['error'] == 'no')
				{
					echo 1;
				}else{
					echo $result['error'];
				}
			}else{
				echo 0;
			}
		}else{
			echo 2;
		}
	}else{
		echo 3;
	}
}
//新秀
?>
