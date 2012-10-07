$(function(){

	var clickHide   = $('#hide-menu a.click-hide'),
		menuWrapper = $('aside.menu-wrapper'),
		clickImg    = $('#hide-menu a.click-hide img');

	

		clickHide.click(function(){

			if(menuWrapper.css('top')==0+'px'){

				menuWrapper.animate({
					
						top:-520
					
				},600,'ease-out',function(){

					clickImg.animate({

						rotate : -180+'deg'

					},250);
				});
			}else{
				menuWrapper.animate({
					
						top:0
					
				},600,'ease-out',function(){

					clickImg.animate({

						rotate : 0

					},250);
				});
			}
		});
})