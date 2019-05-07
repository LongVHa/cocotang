$(document).ready(function(){
				
		$('#logo').css({opacity:0}).show().animate({opacity:1},500, function(){
			$('#main-bg').animate({opacity:1},600, function(){
					$(this).animate({opacity:0.3},1000, function(){		

						var baseUrl = $(location).attr('href');
									
						$(this).animate({opacity:1}, 1000);
					
						$('#content').css('visibility','visible').animate({opacity:1},1000);
					});
			});
		});	
		
		

});