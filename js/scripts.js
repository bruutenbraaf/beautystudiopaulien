$( document ).ready(function() {	
	jQuery( '.carousel-inner').find('.carousel-item:first' ).addClass( 'active' );
	jQuery( '.tab-content').find('.tab-pane:first' ).addClass( 'active' );
	jQuery( 'ul.nav-tabs').find('.tab-pane:first' ).addClass( 'active' );
	jQuery( 'ul.nav-tabs-home').find('li:first' ).addClass( 'active' );
	jQuery( 'tab-content').find('div:first' ).addClass( 'active' );
	jQuery( 'ul.nav-tabs').find('li:first a' ).addClass( 'active' );
	jQuery( '.nav-pills').find('a:first' ).addClass( 'active' );

		$(window).on('scroll', function () {
    var scrollTop = $(window).scrollTop();
	    if (scrollTop > 40) {
	        $('.header .container .row').stop().animate({ 'height': "80px" }, 300);
	        $('.branding').stop().animate({ 'height': "80px" }, 300);
	        $('.header .branding img').stop().animate({ 'height': "65px" }, 300);
	    }
	    else {
	         $('.header .container .row').stop().animate({ 'height': "90px" }, 300)  
	         $('.branding').stop().animate({ 'height': "90px" }, 300);
	         $('.header .branding img').stop().animate({ 'height': "76px" }, 300);
	    }
	});
	
	
	
	$( ".burger" ).click( function(event){
		$('.header .container .row .main_menu').toggleClass("tog");		
		if ( $('.header .container .row .main_menu').hasClass("tog") ) {
			$('.header .container .row .main_menu').stop().animate({ 'visibility': "hidden", 'opacity': "0", 'height': "0vh" });
		}
		else {
			$('.header .container .row .main_menu').stop().animate({ 'visibility': "visible", 'opacity': "1", 'height': "100vh" });
	    }
	});

	$( ".check_button" ).click( function(event){
		$('.check_button').toggleClass("yes");		
		if ( $('.check_button').hasClass("yes") ) {
			$('.not_checked').stop().animate({ 'left': "2px", 'backgroundColor': "888"}), 100;	
			$('.not_checked').removeClass("checked");	
			$('.afspraak_form').fadeOut(300);
			$('.contact_form').fadeIn(300);
		}
		else {
			$('.not_checked').stop().animate({ 'left': "32px", 'backgroundColor': "333"}), 100;
			$('.not_checked').addClass("checked");	
			$('.afspraak_form').fadeIn(300);
			$('.contact_form').fadeOut(300);
	    }
	});
		
});