$(document).ready(function(){
		
//Hide Options
	function hideOpt(hideElem){
		
		$.each(hideElem, function(i, val){		
				$(val).hide();
		});	
	}

//un-depressed button
	function opacityToOne(elem){
		
		$.each(elem, function(i, val){		
			$(val).css({opacity:1});
		});	
	}
	
//button is depressed
	function opacityPointTwo(elem){
		
		$.each(elem, function(i, val){		
			$(val).css({opacity:0.2});
		});	
	}
	
//change Opacity
	function changeOpac(ele){
		if($(ele).css('opacity') == 1){
			$(ele).css({opacity:0.2});
		}else{
			$(ele).css({opacity:1});
		}
	}
			
		

//close all
	function closeAll(){	
					//elements to fade out
		var elem = [
					'#menu-items-wrap',
					'#insta-items-wrap',
					'#fb-items-wrap',
					'.section-menu-container'
					];
		
		$.each(elem, function(i, val){		
			$(val).fadeOut();;
		});	
		
		$('.nav-button').css({opacity:1});
	}
			
			
$('#cafe-sub-menu, #club-sub-menu, .social-item').on('click', function(){
	closeAll();
});
			
			
//MAIN MENU BUTTON
	$('.nav-button').on('click', function(){
		
		// hide options
		var hideElem = [
					'#insta-items-wrap',
					'#fb-items-wrap',
					'#cafe-sub-menu',
					'#club-sub-menu'
					];
					
		hideOpt(hideElem);

		$('#menu-items-wrap').fadeToggle();	
		
		
		//change this opacity
		changeOpac(this);
		
		//change opacity to 1
		var opcElem = [
					'#insta-btn',
					'#fb-btn',
					'#cafe-btn',
					'#club-btn',
					'.nav-container'
					];
		
		opacityToOne(opcElem);		

			
	});
	
	
//INSTAGRAM BUTTON
	$('#insta-btn').on('click', function(){
		
		$('.nav-container').css({opacity:1});	
		$('.nav-button').css({opacity:1});
		
		if($(this).css('opacity') == 1){
			$('#insta-items-wrap').delay(100).fadeIn();
			$('#social-item-insta-cafe').delay(100).fadeIn(200);
			$('#social-item-insta-club').delay(300).fadeIn(400);

		}else{
			$('#social-item-insta-club').delay(100).fadeOut(200);
			$('#social-item-insta-cafe').delay(300).fadeOut(400);
			$('#insta-items-wrap').delay(100).fadeOut();
		}

		
		//change opacity
		if($(this).css('opacity') == 1){
			$(this).css({opacity:0.2});
		}else{
			$(this).css({opacity:1});
		}
	
		if ( $('#menu-items-wrap').is(':visible')){
			$('#menu-items-wrap').fadeToggle(100);
			
		}
		
		//hide cafe/club sub menu
		var eleme = [
					'#cafe-sub-menu',
					'#club-sub-menu'
				]
		hideOpt(eleme);
	

	});
	
	
//FACEBOOK BUTTON
	$('#fb-btn').on('click', function(){
		
		$('.nav-container').css({opacity:1});
		$('.nav-button').css({opacity:1});
		
		if($(this).css('opacity') == 1){
			$('#fb-items-wrap').delay(100).fadeIn();
			$('#social-item-fb-cafe').delay(100).fadeIn(100);
			$('#social-item-fb-club').delay(200).fadeIn(300);

		}else{
			$('#social-item-fb-club').delay(100).fadeOut(100);
			$('#social-item-fb-cafe').delay(200).fadeOut(300);
			$('#fb-items-wrap').delay(100).fadeOut();
		}
		
		//change opacity
		if($(this).css('opacity') == 1){
			$(this).css({opacity:0.2});
		}else{
			$(this).css({opacity:1});
		}
		
		if ( $('#menu-items-wrap').is(':visible')){
			$('#menu-items-wrap').fadeToggle(100);
			
		}
		
		//hide cafe/club sub menu
		var eleme = [
					'#cafe-sub-menu',
					'#club-sub-menu'
					]
		hideOpt(eleme);

	});

	
//HOME BUTTON
	$('#home').on('click', function(){
		//close all menu listings
		
		if ( $('#club-sub-menu').is(':visible')){
				$('#club-sub-menu, .club-social-icon').slideUp();
				
		}
		if ( $('#cafe-sub-menu').is(':visible')){
			
			$('#cafe-sub-menu, .cafe-social-icon').slideUp();
		}
		if($('#menu-items-wrap').is(':visible')){
			$('#menu-items-wrap').fadeToggle('slow');
		}
		
		$('.nav-button').css({opacity:1});
	});
	
	

//SHOW CAFE LISTINGS
	$('#cafe-btn').on('click', function(){
		
		//show listing
		if($('#cafe-btn').css('opacity') == 1){
			$('#cafe-sub-menu').removeClass('fadingOut');
			$('#cafe-sub-menu').fadeIn(30, function(){
				
				$('.cafe-listing-item').each(function(i){
					$(this).delay(40 * i).fadeIn(80);
				});
				
			});
			
		}else{
		//hide listing
			
			$('#cafe-sub-menu').addClass('fadingOut');
			$('#cafe-sub-menu').slideUp(700, function(){
				
				$('.cafe-listing-item').each(function(i){
					$(this).delay(10 * i).fadeOut(10);
				});
				
			});
		}
		
		//change opacity
		if($(this).css('opacity') == 1){
			$(this).css({opacity:0.2});
		}else{
			$(this).css({opacity:1});
		}
				

		//check if club menu is open
		if ( $('#club-sub-menu').is(':visible')){
				$('#club-sub-menu').slideUp();
		}
	
		//show club button
		$('#club-btn').css({opacity:1});		
		
	});
	
	
	
//SHOW CLUB LISTINGS
	$('#club-btn').on('click', function(){
		
		//show listing
		if($('#club-btn').css('opacity') == 1){
			$('#club-sub-menu').removeClass('fadingOut');
			$('#club-sub-menu').fadeIn(30, function(){
				
				$('.club-listing-item').each(function(i){
					$(this).delay(40 * i).fadeIn(80);
				});
				
			});
			
		}else{
		//hide listing
			
			$('#club-sub-menu').addClass('fadingOut');
			$('#club-sub-menu').slideUp(700, function(){
				
				$('.club-listing-item').each(function(i){
					$(this).delay(10 * i).fadeOut(10);
				});
				
			});
		}
		
		
		//change opacity
		if($(this).css('opacity') == 1){
			$(this).css({opacity:0.2});
		}else{
			$(this).css({opacity:1});
		}
	
		//check if cafe menu is open
		if ( $('#cafe-sub-menu').is(':visible')){
			$('#cafe-sub-menu').slideUp();
		}
		
		//show club button
		$('#cafe-btn').css({opacity:1});
		
	});

	
	

	
});