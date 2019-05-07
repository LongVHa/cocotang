var scrollPos = 0;

$('#main').scroll(function (event) {
	//get current scroll position
    var currScrollPos = $(this).scrollTop();
	
	if(currScrollPos >= scrollPos){
		//scrolling down
		$('.nav-container').css({opacity:0.2});
		
		if($('#club-sub-menu').is(':visible') || $('#cafe-sub-menu').is(':visible')){
			$('.nav-container').css({opacity:1});
		}

	}else{
		//scrolling up
		$('.nav-container').css({opacity:1});
	}
	
	scrollPos = currScrollPos;
	
});