$(window).load(function(){
    $('#lightbox').hide();
    $('#lightboxInfo').hide();


	$( ".button" ).click(function() {
	  $( "#lightbox" ).show( );
	  $( "#lightboxInfo" ).show( );


	});
});

$('#lightbox').live('click', function() {
	$('#lightbox').hide();
	$('#lightboxInfo').hide(); 


})