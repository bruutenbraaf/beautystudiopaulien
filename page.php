<?php
get_header(); ?>
	<div class="content-entry">
	</div>
	<div class="omslagfoto" style="background:url('<?php the_field( 'omslagfoto' ); ?>'); background-position:<?php the_field( 'positie_omslagfoto' ); ?>;">
		<div class="container">
			<a href="<?php the_field( 'omslag_foto_url' ); ?>"><div class="afspraak">
				<?php the_field( 'omslag_foto_knop' ); ?>
			</div></a>
			<div class="row">
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
					<h2><?php the_field( 'subtitle' ); ?></h2>
				</div>
			</div>
		</div>
		<div class="cover">
		</div>
	</div>
	<div class="container page_content">
		<div class="row">
			<div class="col-md-3">
				<?php dynamic_sidebar( 'page_sidebar' ); ?>
			</div>
			<div class="col-md-9 the_content">
				<?php the_field( 'pagina_tekst' ); ?>
			</div>
		</div>
	</div>
	<div class="pagina_aanbieding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1><?php the_field( 'aanbieding_titel', 'option' ); ?></h1>
					<h2><?php the_field( 'aanbieding_sub_titel', 'option' ); ?></h2>
				</div>
				<div class="col-md-6 appointment_button">
					<a href="<?php the_field( 'aanbieding_knop_link', 'option' ); ?>" class="button"><?php the_field( 'aanbieding_knop', 'option' ); ?></a>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>