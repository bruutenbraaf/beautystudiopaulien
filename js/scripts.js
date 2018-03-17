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
});