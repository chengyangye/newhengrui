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
});
