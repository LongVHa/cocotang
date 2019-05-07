<!--Main options-->	
	<div class="nav-container">
		<div class="icon-button" id="insta-btn"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/insta.png" /></div>	
			
		<div class="nav-button" id="line-btn">
		  <span class="line"></span>
          <span class="line-half-left"></span><span class="line-half-right"></span>
          <span class="line"></span>
		</div>
			
		<div class="icon-button" id="fb-btn"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fb.png" /></div>
		
<!--insta options-->		
		<div id="insta-items-wrap" class="social-container">
			<div class="social-item" id="social-item-insta-cafe">
			<a href="https://www.instagram.com/cocotang__" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/insta-cafe.png" /></a>
			</div>
			
			<div class="social-item" id="social-item-insta-club">
			<a href="https://www.instagram.com/houseofcocotang/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/insta-club.png" /></a>
			</div>
		</div>
		
<!--facebook options-->			
		<div id="fb-items-wrap" class="social-container">
			<div class="social-item" id="social-item-fb-cafe">
			<a href="https://m.facebook.com/cafecocotang" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fb-cafe.png" /></a>
			</div>
			
			<div class="social-item" id="social-item-fb-club">
			<a href="https://www.facebook.com/thehouseofcocotang" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fb-club.png" /></a>
			</div>
		</div>
	
<!--main menu options-->

		<div id="menu-items-wrap">
			
			<?php if(is_front_page()){ ?>

				<div class="nav-main-item"><a href="oriental-cafe">ORIENTAL CAFE</a></div>
				<div class="nav-main-item"><a href="/#">HOME</a></div>
				<div class="nav-main-item"><a href="cocktail-bar-and-club">COCKTAIL BAR</a></div>	

				
			<?php }else if(is_page('oriental-cafe')){ //show cafe drop down listing?>
				
				<div id="cafe-button" class="nav-main-item"><span id="cafe-btn">ORIENTAL CAFE</span></div>
				<div class="nav-main-item"><a href="/">HOME</a></div>
				<div class="nav-main-item"><a href="cocktail-bar-and-club">COCKTAIL BAR</a></div>	
				
						
			<?php }else{ //show club drop down listing?>
			
				<div class="nav-main-item"><a href="oriental-cafe">ORIENTAL CAFE</a></div>
				<div class="nav-main-item"><a href="/">HOME</a></div>
				<div id="club-button" class="nav-main-item"><span id="club-btn">COCKTAIL BAR</span></div>	
			
			<?php }?>
		
		</div>
				
							
<!--Sub Cafe menu-->
	
			
			<div class="section-menu-container" id="cafe-sub-menu">
				<ul>
					<li class="cafe-listing-item"><a href="#cafe-title-container">Info</a></li>
					<li class="cafe-listing-item"><a href="#speciality-coffee">Speciality Coffee</a></li>
					<li class="cafe-listing-item"><a href="#rare-tea">Rare Tea</a></li>
					<li class="cafe-listing-item"><a href="#cacao">Cacao</a></li>
					<li class="cafe-listing-item"><a href="#cafe-cocktails">Cocktails</a></li>
					<li class="cafe-listing-item"><a href="#bakery">Oriental Bakery</a></li>
					<li class="cafe-listing-item"><a href="#kitchen">Vietnamese Kitchen</a></li>
					<li class="cafe-listing-item"><a href="#first-floor">Venue</a></li>
					<li class="cafe-listing-item"><a href="#cafe-menu">Menu</a></li>
					<li class="cafe-listing-item"><a href="#cncf">CNCF</a></li>
					<li class="cafe-listing-item"><a href="#cafe-hours">Opening Hours</a></li>
					<li class="cafe-listing-item"><a href="#map">Find Us</a></li>
				</ul>
			</div>
			
	
<!--Sub Club menu-->
			
			<div class="section-menu-container" id="club-sub-menu">
				<ul>
					<li class="club-listing-item"><a href="#club-logo-img-wrap">Info</a></li>
					<li class="club-listing-item"><a href="#club-cocktails">Cocktails</a></li>
					<li class="club-listing-item"><a href="#music">Music</a></li>
					<li class="club-listing-item"><a href="#table">Venue</a></li>
					<li class="club-listing-item"><a href="#club-hours">Opening Hours</a></li>
					<li class="club-listing-item"><a href="#map">Find Us</a></li>

				</ul>
			</div>
			
		
	</div>