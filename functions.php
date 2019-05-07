<?php

/* check if user using smaller mobile device */
function my_wp_is_mobile() {
	include_once ( get_template_directory() . '/Mobile_Detect.php');
		$detect = new Mobile_Detect;
		if( $detect->isMobile() && !$detect->isTablet() ) {
		
		include_once ( get_template_directory() . '/index-mobile.php');
	} else {
		
		include_once ( get_template_directory() . '/index.php');
	}
}

/* check if user using tablet device */
function my_wp_is_tablet() {
		include_once ( get_template_directory() . '/Mobile_Detect.php');
		$detect = new Mobile_Detect;
		if( $detect->isTablet() ) {
		
		echo 'is mobile';
	} else {
		
		echo 'is not mobile';
	}
}

add_theme_support( 'post-thumbnails', array( 'post', 'custom-type' ) );


// Register Custom Facebook Review
function custom_facebook_reviews() {

	$labels = array(
		'name'                  => _x( 'Facebook Reviews', 'Facebook Review General Name', 'cocotang' ),
		'singular_name'         => _x( 'Facebook Review', 'Facebook Review Singular Name', 'cocotang' ),
		'menu_name'             => __( 'Facebook Reviews', 'cocotang' ),
		'name_admin_bar'        => __( 'Facebook Review', 'cocotang' ),
		'archives'              => __( 'Facebook Review Archives', 'cocotang' ),
		'all_items'             => __( 'All Reviews', 'cocotang' ),
		'add_new_item'          => __( 'Add A New Facebook Review', 'cocotang' ),
		'add_new'               => __( 'Add New', 'cocotang' ),
		'new_item'              => __( 'New Review', 'cocotang' ),
		'edit_item'             => __( 'Edit Review', 'cocotang' ),
		'update_item'           => __( 'Update Review', 'cocotang' ),
		'view_item'             => __( 'View Review', 'cocotang' ),
		'search_items'          => __( 'Search Review', 'cocotang' ),
		'not_found'             => __( 'Not found', 'cocotang' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'cocotang' ),
		'featured_image'        => __( 'Featured Image', 'cocotang' ),
		'set_featured_image'    => __( 'Set featured image', 'cocotang' ),
		'remove_featured_image' => __( 'Remove featured image', 'cocotang' ),
		'use_featured_image'    => __( 'Use as featured image', 'cocotang' ),
		'insert_into_item'      => __( 'Insert into Review', 'cocotang' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Review', 'cocotang' ),
	);
	$args = array(
		'label'                 => __( 'Facebook Review', 'cocotang' ),
		'description'           => __( 'Facebook Review Description', 'cocotang' ),
		'labels'                => $labels,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'has_archive'           => true,			
		'rewrite'               => array( 'slug' => 'Facebook Reviews', ),
		'supports'              => array( 'author', 'title', 'editor', 'thumbnail','revisions' ),
	);
	register_post_type( 'Facebook Reviews', $args );

}
add_action( 'init', 'custom_facebook_reviews', 0 );


//change custom post 'enter title here'

function change_default_title( $title ){
     $screen = get_current_screen();
 
     if  ( 'facebookreviews' == $screen->post_type ) {
          $title = 'Enter Reviewer\'s Name';
     }
 
     return $title;
}
 
add_filter( 'enter_title_here', 'change_default_title' );

?>