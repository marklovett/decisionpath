/*
 * featureFade - A feature rotator that fades
 *
 * Written by Brad Graham
 *
 * Originally based on the work of:
 *	1) Remy Sharp (http://jqueryfordesigners.com/automatic-infinite-carousel/)
 */

(function() {
	$.fn.featureFade = function(){
		return this.each(function(){
			var $panels = $('#feature .article').css({'position':'absolute','top':'0px','left':'0px','zIndex':'0'}),
				$navLink = $('#feature-nav a'),
			
				items = $panels.length,
				clickCount = 0,
				currentPanel = 0;
			
			// Paging function
			function gotoPanel(panel){
				if (panel >= items){
					panel = 0
				}
				
				$panels.stop(false,true).eq(currentPanel).css({'zIndex':'0'}).end().eq(panel).css({'zIndex':'1'}).fadeIn(1000, function(){
					$panels.not(this).hide();
				});
				
				currentPanel = panel
				
				$navLink.removeClass('current').eq(panel, this).addClass('current');
			}
			
			// Direct Links
			$navLink.click(function(){
				var index = $navLink.index(this);
				gotoPanel(index);
				
				if (clickCount != 0){
					clearInterval(rotator);
				}
				
				clickCount++
				return false;
			}).filter(':first').click();
			
			// Next panel for automatic fading
			$(this).bind('next',function(){
				gotoPanel(currentPanel + 1)
			});
		});
	};
})(jQuery);