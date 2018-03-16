$( document ).ready(function() {	
	jQuery( '.carousel-inner').find('.carousel-item:first' ).addClass( 'active' );
});
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 100
    }, 300);
});
$(function(){
    var hash = location.hash.replace('#','');
    if(hash != ''){
        location.hash = '';
    }
});