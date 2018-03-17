<?php

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');	
	
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'custom-logo' );
	
function register_my_menus() {
  register_nav_menus(
    array(
      'hoofd_menu' => __( 'Hoofd Menu' ),
      'second_menu' => __( 'Secondaire Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
	
	function arphabet_widgets_init() {
		
		register_sidebar( array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar',
			'before_widget' => '<div class="sidebar">',
			'after_widget'  => '</div>',
		) );							
}

add_action( 'widgets_init', 'arphabet_widgets_init' );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Opties');
}

acf_add_options_page( array(

'page_title' 	=> 'Home Page Carousel',
'menu_title' 	=> 'Carousel',
'menu_slug' 	=> 'home-page-carousel',
'capability' 	=> 'edit_posts', 
'icon_url' => 'dashicons-images-alt2',
'position' => 7

) );


acf_add_options_page( array(

'page_title' 	=> 'Home Page Tabs',
'menu_title' 	=> 'Home tabs',
'menu_slug' 	=> 'home-page-tabs',
'capability' 	=> 'edit_posts', 
'icon_url' => 'dashicons-images-alt',
'position' => 8

) );


?>