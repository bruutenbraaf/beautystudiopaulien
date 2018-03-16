<?php
get_header(); ?>

<?php if(is_front_page()): ?>
	<?php if ( have_rows( 'carouel' ) ): ?>
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
		  
	<?php while ( have_rows( 'carousel' ) ) : the_row(); ?>
			<?php if ( get_row_layout() == 'slide' ) : ?>
				<?php if ( get_sub_field( 'slider_afbeelding' ) ) { ?>
		  
	    <div class="carousel-item" style="background:url('<?php the_sub_field( 'slider_afbeelding' ); ?>');">
	       </div>
	     <?php } ?>
				    	<?php endif; ?>
					<?php endwhile; ?>	 
	  
	  
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	
	<?php else: ?>
		<?php // no layouts found ?>
	<?php endif; ?>
	<?php endif; ?>
<?php get_footer(); ?>