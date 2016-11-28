

$(document).ready(function() {
	var user;
	$(':text').focus();
	$('.aConnect').click(function() {
		$('.container, .aConnect').fadeOut('fast');
		$('.containerHome').animate({
			'top' : '+=37em'
		}, 1000);
		//$('<center><img src="images/bricolage.png" /></center>').appendTo('html').css({
		$('<div id="container5"></div>').appendTo('html').css({
			'z-index' : '-1',
			'position': 'absolute',
			'top' : '1em'
		}).animate({
			'top' : '+=28em'
		}, 3000);

	
	//$('<center><img src="images/bricolage2.png" /></center>').appendTo('html').css({
		$('<div id="container5"></div>').appendTo('html').css({
			'z-index' : '-1',
			'float' : 'right',
			'position': 'absolute',
			'bottom' : '5em'
		}).animate({
			'bottom' : '+=18em'
		}, 1000);
	
	//$('<center><img src="images/bricolage3.png" /></center>').appendTo('html').css({
		$('<div id="container5"></div>').appendTo('html').css({
			'z-index' : '-1',
			'position': 'absolute',
			'top' : '-8em',
			'left': '39em'
		}).animate({
			'top' : '+=18em'
		}, 500);
	
	//$('<center><img src="images/bricolage4.png" /></center>').appendTo('html').css({
		$('<div id="container5"></div>').appendTo('html').css({
			'z-index' : '-1',
			'display' : 'inline-block',
			'position': 'absolute',
			'right' : '-18em'
		}).animate({
			'right' : '+=10em'
		}, 1600);
	});
	//POSTEAR
	
	function callBack($post) {
		/*var newHTML;
    newHTML = '<h2>Tu post ha sido creado</h2>';
    newHTML += '<p>Tu maravillosa cita es ';
    newHTML += $post + '.</p>';
    $('.contenedor3').html(newHTML);*/
		alert('LISTO');
	}
	
	$('#posteo2').click(function(evt) {
		
		user = $('#usuario3').text();
		var $post = $('#posteo').val();
		var $rePost = $('<p>' + '<span class="color">' + user + '</span>' + ' dijo: ' + $post + '</p>').appendTo('.contPosteo');
		
		$.post('PlantillaVinchucaPosteo.php', 'posteo='+ $post + '&posteo2=PUBLICAR', callBack);
		$post = "";
		$('#posteo').val($post);
		return false;
		
	});
});

///////////////////////////////////////////////////////////////////////////////////////////////////

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
		$('#fImg')
			.attr('src', e.target.result)
			.width('100%')
  		.height('100%');
   	};

    reader.readAsDataURL(input.files[0]);
	}
}