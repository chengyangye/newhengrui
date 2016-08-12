$(function() {
	$(".swiper-wrapper li").prepend('<div class="bg"></div>');
	$(".swiper-wrapper li").addClass("swiper-slide");
	var mySwiper = new Swiper('.swiper-container', {
		autoplay: 3000,//可选选项，自动滑动
		effect : 'fade',
		pagination: '.swiper-pagination',
		paginationClickable: true,
		paginationBulletRender: function (index, className) {
			return '<span class="' + className + '">' + (index + 1) + '</span>';
		}
	})

	$("#table_2 div").hover(function(){
		var ind1=$("#table_2 div").index(this);
		$(this).find("a").addClass("thover").parent("div").siblings("div").find("a").removeClass("thover");
		$(".con_tab_12").eq(ind1).show().siblings().hide();
	});
});

var nav = document.getElementById("navi");
var links = nav.getElementsByTagName("li");
var lilen = nav.getElementsByTagName("a"); //判断地址
var currenturl = document.location.href;
var last = 0;
for (var i=0;i<links.length;i++)
{
	var linkurl = lilen[i].getAttribute("href");
	if(currenturl.indexOf(linkurl)!=-1)
	{
		last = i;
	}
}
links[last].className = "navon"; //高亮代码样式

var tabs=document.getElementById("tab").getElementsByTagName("li");
var divs=document.getElementById("tab_con").getElementsByTagName("div");

function change(obj){

	for(var i=0;i<tabs.length;i++)

	{

		if(tabs[i]==obj){

			tabs[i].className="fli";

			divs[i].className="fdiv";

		}

		else{

			tabs[i].className="";

			divs[i].className="";

		}

	}

}
for(var i=0;i<tabs.length;i++){

	tabs[i].onclick=function(){change(this);}

}
stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	panelbehavior: {speed:500, wraparound:false, persist:true},
	autostep: {enable:true, moveby:1, pause:2000},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['templates/default/css/butt-left.gif', 0, 64], rightnav: ['templates/default/css/butt-right.gif', -11, 64]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'], //content setting ['inline'] or ['external', 'path_to_external_file']
	oninit:function(){
		isloaded=true
		document.getElementById('displaycssbelt').style.visibility="visible";
		document.getElementById('stocklevels').style.visibility="visible";
	}
})