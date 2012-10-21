$(function(){
	var clickHide   = $('#hide-sidebar a.click-hide'),
		menuWrapper = $('aside.sidebar'),
		clickImg    = $('#hide-sidebar a.click-hide img');

		clickHide.click(function(){

			if(menuWrapper.css('top')==0+'px'){

				menuWrapper.animate({	

						top:-500

				},360,null,function(){

					clickImg.animate({

						rotate : -180+'deg'

					},250);

				});
			}else{

				menuWrapper.animate({

						top:0		

				},360,null,function(){

					clickImg.animate({

						rotate : 0
						
					},250);
				});
			}
		});
})