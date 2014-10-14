$(document).ready(function(){
	$('.orda').click(function(){
		$('#orda').slideToggle();
	});
	var e = 1;
	$('#g_hover_menu').click(function(){
		if (e == 1 ) {
			$('#sidebar').hide();
			$('#two_part').removeClass('gm-4').addClass('gm-6');
			e++;
		} else {

			$('#two_part').removeClass('gm-6').addClass('gm-4');
						$('#sidebar').fadeIn(500);
			e--;
		}
	});

});