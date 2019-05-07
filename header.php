<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<!--<meta name="format-detection" content="telephone=no">-->
	
<?php
	
	//home
	$home_title = '<title>Oriental Cafe &amp; Cocktail Bar and Club - Coco Tang</title>';
	$home_desc = '<meta name="description" content="A popular hang out spot with a with young crowd, with a daytime upstairs Oriental Café & late night downstairs Cocktail Bar and Club">';
	
	//cafe
	$cafe_title = '<title>Oriental Café * Speciality Coffee Roaster * Cocktail Bar * Vietnamese Kitchen - Coco Tang</title>';
	$cafe_desc = '<meta name="description" content="An Oriental Café serving authentic Vietnamese Food in the heart of Nottingham. With tropical outdoor roof garden and 1950s Saigon inspired interior">';
	
	//club
	$club_title = '<title>Underground Late-night Bar & Club - Coco Tang</title>';
	$club_desc = '<meta name="description" content="A sprawling underground basement space with a hidden roof garden, long established with well renowned & unique Cocktail Menu">';
	

if(is_page('oriental-cafe')){//cafe
	echo $cafe_title, $cafe_desc;
}elseif(is_page('cocktail-bar-and-club')){//club
	echo $club_title, $club_desc;
}else{
	echo $home_title, $home_desc;
}

?>

	
<link rel="icon" href="https://www.cocotang.co.uk/wp-content/uploads/2018/06/favicon.png">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>

</head>

<body>

	<div id="home-bg"></div>
		<div id="nav-wrap">
			<?php include_once('nav-menu.php'); ?>
		</div>

	<div id="main">	

		<div id="main-inner">
		

		

