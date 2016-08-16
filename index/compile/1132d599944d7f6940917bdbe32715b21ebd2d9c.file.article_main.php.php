<?php /* Smarty version Smarty-3.1.3, created on 2016-08-15 18:33:22
         compiled from "templates/default/index\module\article_main.php" */ ?>
<?php /*%%SmartyHeaderCode:550157ae6ea40405f8-61262586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1132d599944d7f6940917bdbe32715b21ebd2d9c' => 
    array (
      0 => 'templates/default/index\\module\\article_main.php',
      1 => 1471257200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '550157ae6ea40405f8-61262586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57ae6ea412ac2',
  'variables' => 
  array (
    'S_TPL_PATH' => 0,
    'lang' => 0,
    'channel_title' => 0,
    'global' => 0,
    'cat_name' => 0,
    'page_title' => 0,
    'show_sheet' => 0,
    'show_pic' => 0,
    'article' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ae6ea412ac2')) {function content_57ae6ea412ac2($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\Users\de\tool\xampp\htdocs\newhengrui\smarty\plugins\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\Users\de\tool\xampp\htdocs\newhengrui\smarty\plugins\modifier.date_format.php';
?>

<div class="pos">
	<div class="ps_1200">
		<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/pos.png">&nbsp;&nbsp;你的位置:
		<a href="./"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['channel_title']->value){?>-&gt;<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['cat_name']->value){?>-&gt;<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['global']->value['cat']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page_title']->value){?>-&gt;<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['global']->value['id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,20);?>
</a><?php }?>
	</div>
</div>
<div class="100">
	<div class="content">
		<!--左侧开始 -->
		<div class="left">
			<div class="zt">
				<ul>
					<li class="li_a"><a href="https://kh.zgqbyp.com/SelfOpenAccount/index.jsp?brokerId=2351">南京文交所开户中心</a></li>
					<li class="li_b"><a href="https://kh.zgqbyp.com/SelfOpenAccount/index.jsp?brokerId=2351">河北文交所开户中心</a></li>
				</ul>
			</div>

			<!-- 下载中心 -->
			<div class="kaihu">
				<div id="tab_con">
					<div class="fdiv wx">
						<img style="margin-top:10px; width:273px; height:59px" class="phone1" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/phone1.jpg">
						<p style="text-align:center;width:273px; height:40px; line-height:30px;color:#444444; font-size:15px; width:273px; margin-top:5px;">
							南京文交所：3244603778&nbsp;<a target="_blank" href="tencent://message/?uin=3244603778&Site">
							<img style="vertical-align: middle;width: 85px;" alt="在线咨询" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/qqq.jpg"></a>
						</p>
						<big style="text-align:center;width:273px; height:40px; line-height:30px;color:#444444; font-size:15px; width:273px; margin-top:5px;">
							河北文交所：3270541268<a target="_blank" href="tencent://message/?uin=3270541268&Site">
							<img style="vertical-align:middle; width: 85px;" alt="在线咨询" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/qqq.jpg"></a></big>
					</div>
				</div>

				<div class="weixin"> <img width="95" height="95" style="margin-right:20px;" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/wx.png">
					<div class="zfwj"><b>恒瑞文金</b>
						<p>南京|河北文交所<br>
							第一服务品牌</p>
					</div>
				</div>
			</div>
		</div>
		<if class="right">
			<?php if ($_smarty_tpl->tpl_vars['show_sheet']->value==1){?>
			<?php if ($_smarty_tpl->tpl_vars['show_pic']->value==0){?>
			<div class="name">
				<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/sg.jpg"><b><?php if ($_smarty_tpl->tpl_vars['channel_title']->value){?><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['cat_name']->value){?><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page_title']->value){?><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
<?php }?></b>
			</div>
			<div class="list">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<ul class="">
					<li><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/li-p.png">&nbsp;&nbsp;&nbsp;<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
</a></li>
					<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['art_add_time'],"%Y-%m-%d");?>
</span>
					<p><?php echo $_smarty_tpl->tpl_vars['item']->value['art_description'];?>
<a class="red" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
">[阅读全文]</a></p>
				</ul>
				<?php } ?>
				<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

			</div>
			<?php }else{ ?>
					<div class="name">
						<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/sg.jpg"><b>交易品种</b>
					</div>
					<div class="list_p">
						<ul class="list_">
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
							<li><img width="204" height="198" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_img'];?>
"><b><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
</a></b></li>
							<?php } ?>
						</ul>
						<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

					</div>
			<?php }?>
			<?php }else{ ?>
			<div class="name">
				<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/sg.jpg"><b><?php echo $_smarty_tpl->tpl_vars['article']->value['art_title'];?>
</b>
			</div>
			<div class="cont">
				<div class="xiaohao"><big class="red">发布者：<?php echo $_smarty_tpl->tpl_vars['article']->value['art_author'];?>
</big>&nbsp;&nbsp;&nbsp;发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['art_add_time'],"%Y-%m-%d %H:%M");?>
&nbsp;&nbsp;&nbsp;</div>
				<!--<div class="zaiyao"><b>摘要：</b>鉴于邮币卡现货线上交易平台快速发展，截止至目前，全国已有30多家交易平台投入运营，正在筹备的有20多家，为了行业的健康发展，行业规范亟待建立。为统一全国各地文交所运营规...</div>-->
				<div class="art">
					<?php echo $_smarty_tpl->tpl_vars['article']->value['art_text'];?>

					<!-- JiaThis Button BEGIN -->
					<!-- JiaThis Button END -->

				</div>
				<div style="padding: 20px 0 0;vertical-align: middle">
					<span style="vertical-align: middle;">分享到:</span>&nbsp;&nbsp;<div class="bdsharebuttonbox" style="display: inline-block;vertical-align: middle"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
				</div>
				<?php echo $_smarty_tpl->getSubTemplate ("module/prev_next.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['global']->value['id']), 0);?>

			</div>
			<?php }?>

	<!--右侧结束 -->
</div>
</div>
<?php }} ?>