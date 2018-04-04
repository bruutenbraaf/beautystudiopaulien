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
			'name'          => 'Pagina Sidebar',
			'id'            => 'page_sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>'
		) );
		
		register_sidebar( array(
			'name'          => 'Footer een',
			'id'            => 'footer_een',

		) );
		
		register_sidebar( array(
			'name'          => 'Footer twee',
			'id'            => 'footer_twee',
		) );	
		
		register_sidebar( array(
			'name'          => 'Footer drie',
			'id'            => 'footer_drie',
		) );	
		
		register_sidebar( array(
			'name'          => 'Footer vier',
			'id'            => 'footer_vier',
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

acf_add_options_page( array(

'page_title' 	=> 'Onze aanbiedingen',
'menu_title' 	=> 'Aanbieding',
'menu_slug' 	=> 'aanbiedingen',
'capability' 	=> 'edit_posts', 
'icon_url' => 'dashicons-tag',
'position' => 9

) );

acf_add_options_page( array(

'page_title' 	=> 'Over ons homepagina',
'menu_title' 	=> 'Over ons',
'menu_slug' 	=> 'over-ons',
'capability' 	=> 'edit_posts', 
'icon_url' => 'dashicons-id-alt',
'position' => 9

) );

acf_add_options_page( array(

'page_title' 	=> 'Prijzenlijst',
'menu_title' 	=> 'Prijzenlijst',
'menu_slug' 	=> 'prijzenlijst',
'capability' 	=> 'edit_posts', 
'icon_url' => 'dashicons-tag',
'position' => 9

) );





?>