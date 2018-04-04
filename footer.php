	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php dynamic_sidebar( 'footer_een' ); ?>
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'footer_twee' ); ?>
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'footer_drie' ); ?>
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'footer_vier' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<div class="social">
				<i class="fa fa-facebook-official" aria-hidden="true"></i> | <i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
			<div class="row">
				<div class="col-md-4">
					&copy; Beauty Studio Paulien 
				</div>
				<div class="col-md-4 conditions">
					Algemene voorwaarden | Producten
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
	</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() )?>/js/bootstrap.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() )?>/js/scripts.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() )?>/js/googlemaps.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZn1deMhAw6igAgVh56mC7r7zVRSEzv6w"></script>
		<?php wp_footer(); ?>
	</body>
</html>