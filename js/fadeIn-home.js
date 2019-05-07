$(document).ready(function(){
	
	
	window.location.href.split('#')[0]; // remove hash in url

	$('a.home').click(function() { // remove anchor jump
		return false;
	});
	
    $("#main").scrollTop(0);//reset scroll location on refresh
	
	var offSetTop = 350;
	
	if($(window).width() < 980){
		offSetTop = 230;
	}
	

	var curr_url = $(document).attr('title');//fetch current url
	
	if(curr_url == 'Oriental Cafe & Cocktail Bar and Club - Coco Tang'){//fade only when on home page
		
		
			$('#home_nav_wrapper').animate({opacity:1}, 1500, function(){//logo bg
							
				$('.nav-container').show().animate({opacity:1}, 1, function(){//nav bar
	
					$('#home_nav_contact').animate({opacity:1}, 2000, function(){ //tel
					
						$('.nav-button').css({opacity:0.2}); //line button
						$('#menu-items-wrap').slideDown(); //	cafe / club buttons
						
					}); 
					
				}); 
							
			});	
			
	}else{
		
			$('.nav-container').show().animate({opacity:1}, 800, function(){
				
				$('.nav-button').css({opacity:0.2}); //linebutton
				$('#menu-items-wrap').slideDown(700); //	cafe / club buttons
				
			}); //nav bar
	}
	
	


});