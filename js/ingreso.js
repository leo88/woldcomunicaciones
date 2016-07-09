$(document).ready(function($) {
	$('.blanco').submit(function(event) {

		var datos = $(this).serialize();

		$.post( "controlador/ccliente2.php", datos , function( response ) {
		  	$('#name').val("");
		  	$('#telephone').val("");
		  	$('#address').val("");
		  	$('#email').val("");
		  	alert(response);
		});

		event.preventDefault();
	});
});