$( document ).ready(function() {
	setHeight();
});

    
function setHeight() {   	
	$('.auto-resize').each(function( index ) {
	  $( this ).css('height', $(window).height());  
	});
}