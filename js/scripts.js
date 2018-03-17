$( document ).ready(function() {	
	jQuery( '.carousel-inner').find('.carousel-item:first' ).addClass( 'active' );
	jQuery( '.tab-content').find('.tab-pane:first' ).addClass( 'active' );
	jQuery( 'ul.nav-tabs').find('.tab-pane:first' ).addClass( 'active' );
	jQuery( 'ul.nav-tabs-home').find('li:first' ).addClass( 'active' );
	jQuery( 'tab-content').find('div:first' ).addClass( 'active' );
	jQuery( 'ul.nav-tabs').find('li:first a' ).addClass( 'active' );
	jQuery( '.nav-pills').find('a:first' ).addClass( 'active' );

	
});