<?php /* Smarty version Smarty-3.1.3, created on 2016-08-15 14:03:44
         compiled from "templates/default/index\module\article_list.php" */ ?>
<?php /*%%SmartyHeaderCode:2843057ae6e15905e40-53892996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f89ee25d7671c02c224fb492a16f45f13cf622d4' => 
    array (
      0 => 'templates/default/index\\module\\article_list.php',
      1 => 1471240943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2843057ae6e15905e40-53892996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_57ae6e15b6f1d',
  'variables' => 
  array (
    'best_art_cat' => 0,
    'cat' => 0,
    'S_TPL_PATH' => 0,
    'art_list_nj' => 0,
    'item' => 0,
    'art_list_hb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ae6e15b6f1d')) {function content_57ae6e15b6f1d($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\Users\de\tool\xampp\htdocs\newhengrui\smarty\plugins\modifier.date_format.php';
?>
<div class="tz">
  <!--通知公告开始 -->
  <div class="news">
    <!--通知公告左侧开始 -->
    <div class="news-left">
      <div class="h_tab">
        <div id="table_2" class="tab_l">
            <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_art_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']++;
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']==0){?>
                    <div><a target="_blank" class="thover" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['cat']->value['cat_id']),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</a></div>
                <?php }else{ ?>
                    <div><a target="_blank" class="" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['cat']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</a></div>
                <?php }?>

            <?php } ?>
          <!--<div id="stab1"><a target="_blank" class="" href="/notice/" class="thover">通知公告</a></div>-->
        </div>
        <script language="javascript">
			$(function(){
			 $("#table_2 div").hover(function(){
			  var ind1=$("#table_2 div").index(this);
			  $(this).find("a").addClass("thover").parent("div").siblings("div").find("a").removeClass("thover");
			  $(".con_tab_12").eq(ind1).show().siblings().hide();
			 });
			})
      </script>
        <div class="ht_con">
            <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_art_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']==0){?>
                <div class="con_tab_12" style="display: block;">
                <?php }else{ ?>
                <div class="con_tab_12" style="display: none;">
             <?php }?>
                <div class="ht_pic">
                    <div class="ht_pic_left">

                        <img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/imgtztop<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index'];?>
.jpg">

                    </div>
                    <div class="ht_pic_right">
                        <div class="znwjs"><a target="_blank" href="/notice/nj/"><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/nj.jpg"></a></div>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_list_nj']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['art_list_nj']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['art_list_nj']['index']++;
?>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['art_list_nj']['index']==0){?>
                            <div class="ht_pic_right_top"><a target="_blank" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
">
                                <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</h1>
                            </a>
                                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['art_description'];?>
<a target="_blank" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
">[查看详情]</a></p>
                            </div>
                            <?php }?>
                        <?php } ?>

                        <div class="xian"></div>
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_list_nj']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['art_list_nj']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['art_list_nj']['index']++;
?>
                                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['art_list_nj']['index']!=0){?>
                                <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['art_add_time'],"%Y-%m-%d");?>
</span></li>
                                <?php }?>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
                <div class="line"></div>
                <div class="ht_pic">
                    <div class="ht_pic_left"><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/imgtzfooter<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index'];?>
.jpg"></div>
                    <div class="ht_pic_right">
                        <div class="znwjs"><a target="_blank" href="/notice/zn/"><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/zn.jpg"></a></div>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_list_hb']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['art_list_hb']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['art_list_hb']['index']++;
?>
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['art_list_hb']['index']==0){?>
                        <div class="ht_pic_right_top"><a target="_blank" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
">
                            <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</h1>
                        </a>
                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['art_description'];?>
<a target="_blank" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
">[查看详情]</a></p>
                        </div>
                        <?php }?>
                        <?php } ?>
                        <div class="xian"></div>
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_list_hb']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['art_list_hb']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['art_list_hb']['index']++;
?>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['art_list_hb']['index']!=0){?>
                            <li><i>·&nbsp;&nbsp;</i><a target="_blank" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['art_add_time'],"%Y-%m-%d");?>
</span></li>
                            <?php }?>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
      </div>
    </div>
    <div class="news-right">
      <!-- 开户微信 -->
      <div class="kaihu">
        <ul style=" border-bottom:1px #e0e0e0 solid" id="tab">
          <li class="">快速通道</li>
          <li style="" class="fli"><img alt="立即开户" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/ljkh.jpg"></li>
        </ul>
        <div id="tab_con">
          <div class="">
          <img style="margin-top:10px; width:273px; height:59px" class="phone1" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/phone1.jpg">
          <big style="text-align:center;width:273px; height:40px; line-height:30px;color:#444444; font-size:15px; width:273px; margin-top:5px;">
          南京文交所：<a href="tencent://message/?uin=3244603778&Site">3244603778 </a>
              <a target="_blank" href="tencent://message/?uin=3244603778&Site"><img style="vertical-align: middle;width: 85px;" alt="在线咨询" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/qqq.jpg"></a>
          </big>
          <big style="text-align:center;width:273px; height:40px; line-height:30px;color:#444444; font-size:15px; width:273px; margin-top:5px;">
          河北文交所：<a href="tencent://message/?uin=3270541268&Site">3270541268 </a><a target="_blank" href="tencent://message/?uin=3270541268&Site"><img style="vertical-align: middle;width: 85px;" alt="在线咨询" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/qqq.jpg"></a></big></div>
          <div class="fdiv">
          <a target="_blank" href="https://kh.zgqbyp.com/SelfOpenAccount/index.jsp?brokerId=2351"><img style="margin-top:18px;height:52px;" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/tubiao.png"><span style="font-size:24px; height:52px;vertical-align:50%;">南京文交所</span><span class="mianfei">免费开户</span></a><br>
          <a target="_blank" href="https://kh.zgqbyp.com/SelfOpenAccount/index.jsp?brokerId=2351"><img style="margin-top:20px;height:52px;" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
img/tubiao0.png"><span style="font-size:24px; height:52px;vertical-align:50%;">河北文交所</span><span class="mianfei">免费开户</span></a></div>
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
  </div>
</div>
    </div>
<?php }} ?>