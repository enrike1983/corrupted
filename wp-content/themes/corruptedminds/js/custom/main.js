$( document ).ready(function() {
	setHeight();
});

$( window ).resize(function() {
    setHeight();
});
    
function setHeight() {   	
	$('.auto-resize').each(function( index ) {
	  $( this ).css('height', $(window).height());  
	});
}

$(".inline").colorbox({inline:true, width:"50%"});