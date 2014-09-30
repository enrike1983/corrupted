$( document ).ready(function() {
	setHeight();
});

$( window ).resize(function() {
    setHeight();
});

    
function setHeight() {
    var $tab = $('.auto-resize');
    $tab.css('height', $(window).height());    	
}