$(function(){

	var clickHide = $('#hide-menu a.click-hide'),
		menuWrapper = $('aside.menu-wrapper'),
		clickImg = $('#hide-menu a.click-hide img');
	clickHide.click(function(){
		menuWrapper.animate({
			top:-520
		},600,'ease-out',function(){
			clickImg.animate({
				rotate : -180+'deg'
			},300).click(function(){
				menuWrapper.animate({
					top:0
				},600,'ease-out',function(){
					clickImg.animate({
						rotate : 180+'deg'
					},300);
				});	
			});
		});
	});
})