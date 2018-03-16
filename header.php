<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('|', true, 'right'); ?> </title>	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() )?>/style.css" type="text/css" media="all" />
</head>
<body>
<div class="header">
	<div class="container">
		<div class="row">
			<a href="<?php echo get_home_url(); ?>">
				<div class="branding">				
					<?php if ( get_field( 'logo', 'option' ) ) { ?>
						<img src="<?php the_field( 'logo', 'option' ); ?>" />
					<?php } ?>		
				</div>
			</a>
			<div class="col-md-2">	
			</div>
			<div class="col-md-8">
				<?php wp_nav_menu( array( 'theme_location' => 'hoofd_menu' ) ); ?>
			</div>
			<div class="col-md-2 appointment">	
				<a href="<?php the_field( 'appointment_link', 'option' ); ?>"><?php the_field( 'appointment_text', 'option' ); ?></a>
			</div>
		</div>
	</div>
</div>