$(document).ready(function() {

/////scroll to anchor
	
  $('a').click(function() {
	 
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		 
			 var target = $(this.hash);
			 var offSet = 100;
			 var navWidth = $(window).width();
			 
			// target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

			 //set mobile width
			 if(navWidth = 320){
				offSet = 20;
			 }
			
			//check if 'home' option is selected
			if(target[0]['id'] == 'logo'){
				offSet = 100;
			}					
	
			 //smooth scroll to anchor
			if(target.length) {

						$('#main').animate({
						  scrollTop: $('#main').scrollTop() + target.offset().top -offSet
						}, 1000);

						if ( $('#cafe-sub-menu').is(':visible')){
							$('#cafe-sub-menu').fadeOut(100);
							$('#cafe-btn').css({opacity:1});
							
						}
							
						if ( $('#club-sub-menu').is(':visible')){
							$('#club-sub-menu').fadeOut(100);
							$('#club-btn').css({opacity:1});
							
						}
						return false;
						
			}

	   }
  });


  
});
