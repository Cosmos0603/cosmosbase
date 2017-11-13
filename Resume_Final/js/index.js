/**
 * 页面主要逻辑
 */
$(function(){
	var nav = $('.header-nav'); //获取导航栏组件
	var navOffsetTop = nav.offset().top; //导航栏距离页面顶部的距离

	//给页面绑定滚动事件
	$(window).on('scroll', function(){
		var pageScrollTop = $(window).scrollTop(); //页面滚动的高度
		if (pageScrollTop >= navOffsetTop) {
			nav.css('position', 'fixed');
		} else {
			nav.css('position', 'relative');
		}
	});
});