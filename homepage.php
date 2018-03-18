<?php
	
/*
	
Template Name: homepagina

*/	
	
get_header(); ?>
	<div class="content-entry">
	</div>
	<?php if(is_front_page()): ?>
		<?php if ( have_rows( 'homepagina_carousel', 'option' ) ): ?>
		
			<div class="home_carousel">	
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">			
					  <?php while ( have_rows( 'homepagina_carousel', 'option' ) ) : the_row(); ?>						  
					  	<?php if ( get_row_layout() == 'carousel_slide' ) : ?>
					  		<?php if ( get_sub_field( 'carousel_afbeelding' ) ) { ?>  
					  			<div class="carousel-item" style="background:url('<?php the_sub_field( 'carousel_afbeelding' ); ?>'); 
						  		background-position: <?php the_sub_field( 'achtergrond_positie' ); ?>">
						  		<div class="container">
						  			<div class="row">
						  				<div class="col-md-12">
						  					<h1><?php the_sub_field( 'carousel_titel' ); ?></h1>
						  					<h2><?php the_sub_field( 'carousel_beschrijving' ); ?></h2>
						  					<a href="<?php the_sub_field( 'knop_link' ); ?>" class="button"><?php the_sub_field( 'carousel_knop' ); ?></a>
							    		</div>
						    		</div>
					    		</div>
				    		</div>	
							<?php } ?>
			    	<?php endif; ?>
				<?php endwhile; ?>	    
				  </div>
				  <a href="#content"><div class="down">
					  <svg viewBox="0 0 31.5 31.5" style="enable-background:new 0 0 31.5 31.5;" xml:space="preserve">
						<path class="st0" d="M21.2,5c-0.4-0.4-1.1-0.4-1.6,0c-0.4,0.4-0.4,1.1,0,1.6l8,8H1.1c-0.6,0-1.1,0.5-1.1,1.1c0,0.6,0.5,1.1,1.1,1.1
							h26.6l-8,8c-0.4,0.4-0.4,1.2,0,1.6c0.4,0.4,1.2,0.4,1.6,0l10-10c0.4-0.4,0.4-1.1,0-1.6L21.2,5z"/>
						</svg>
				    </div>
				  </a>
				  <div class="controls">
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						 <svg viewBox="0 0 31.5 31.5" style="enable-background:new 0 0 31.5 31.5;" xml:space="preserve">
							<path class="st0" d="M21.2,5c-0.4-0.4-1.1-0.4-1.6,0c-0.4,0.4-0.4,1.1,0,1.6l8,8H1.1c-0.6,0-1.1,0.5-1.1,1.1c0,0.6,0.5,1.1,1.1,1.1
								h26.6l-8,8c-0.4,0.4-0.4,1.2,0,1.6c0.4,0.4,1.2,0.4,1.6,0l10-10c0.4-0.4,0.4-1.1,0-1.6L21.2,5z"/>
						</svg>
					  </a>
					  <div class="seperator">
					  </div>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <svg viewBox="0 0 31.5 31.5" style="enable-background:new 0 0 31.5 31.5;" xml:space="preserve">
							<path class="st0" d="M21.2,5c-0.4-0.4-1.1-0.4-1.6,0c-0.4,0.4-0.4,1.1,0,1.6l8,8H1.1c-0.6,0-1.1,0.5-1.1,1.1c0,0.6,0.5,1.1,1.1,1.1
								h26.6l-8,8c-0.4,0.4-0.4,1.2,0,1.6c0.4,0.4,1.2,0.4,1.6,0l10-10c0.4-0.4,0.4-1.1,0-1.6L21.2,5z"/>
						</svg>
					  </a>
				  </div>
				</div>	
			</div>
		<?php else: ?>
			<?php // no layouts found ?>
		<?php endif; ?>
		<div id="content">
		</div>
		<div class="content_intro">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
					<?php if ( have_rows( 'home_tabs', 'option' ) ): ?>
						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<?php while ( have_rows( 'home_tabs', 'option' ) ) : the_row(); ?>
								<?php if ( get_row_layout() == 'home_tab' ) : ?>						
									<a class="nav-link" id="v-pills-<?php the_sub_field( 'unique_id' ); ?>-tab" data-toggle="pill" href="#v-pills-<?php the_sub_field( 'unique_id' ); ?>" role="tab" aria-controls="v-pills-<?php the_sub_field( 'unique_id' ); ?>"><?php the_sub_field( 'titel' ); ?></a>
						  		<?php endif; ?>
						  	<?php endwhile; ?>					 					  
						</div>
						<?php else: ?>
							<?php // no layouts found ?>
						<?php endif; ?>
					</div>
					<div class="col-md-8">
						<?php if ( have_rows( 'home_tabs', 'option' ) ): ?>
							<div class="tab-content" id="v-pills-tabContent">
								<?php while ( have_rows( 'home_tabs', 'option' ) ) : the_row(); ?>
									<?php if ( get_row_layout() == 'home_tab' ) : ?>
										<div class="tab-pane fade show" id="v-pills-<?php the_sub_field( 'unique_id' ); ?>" role="tabpanel" aria-labelledby="v-pills-<?php the_sub_field( 'unique_id' ); ?>-tab">
											<h1><?php the_sub_field( 'titel' ); ?></h1>
											<h2><?php the_sub_field( 'sub_titel' ); ?></h2>
											<?php the_sub_field( 'tekst' ); ?>
											<a href="<?php the_sub_field( 'knop_link' ); ?>" class="button"><?php the_sub_field( 'knop' ); ?></a>
						  				</div>
						  			<?php endif; ?>
						  		<?php endwhile; ?>
						</div>				
						<?php else: ?>
							<?php // no layouts found ?>
						<?php endif; ?>					
					</div>			
				</div>
			</div>
		</div>
		<?php if ( get_field( 'aanbieding_afbeelding', 'option' ) ) { ?>			
			<div class="feautured_image" style="background:url('<?php the_field( 'aanbieding_afbeelding', 'option' ); ?>');">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h1><?php the_field( 'aanbieding_titel', 'option' ); ?></h1>
							<h2><?php the_field( 'aanbieding_sub_titel', 'option' ); ?></h2>
						</div>
						<a href="<?php the_field( 'aanbieding_knop_link', 'option' ); ?>" class="button"><?php the_field( 'aanbieding_knop', 'option' ); ?></a>
					</div>
				</div>
				<div class="cover">
				</div>				
			</div>
		<?php } ?>
	<?php if ( get_field( 'about_afbeelding', 'option' ) ) { ?>
		<div class="informatie_content">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="<?php the_field( 'about_afbeelding', 'option' ); ?>">
					</div>
					<div class="col-md-6">
						<h1><?php the_field( 'about_titel', 'option' ); ?></h1>
						<h2><?php the_field( 'about_sub_titel', 'option' ); ?></h2>
						<?php the_field( 'about_tekst', 'option' ); ?>
						<a class="button" href="<?php the_field( 'knop_link', 'option' ); ?>"><?php the_field( 'about_knop_tekst', 'option' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>	
	<?php endif; ?>
<?php get_footer(); ?>