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



	$('.loot').live("click", function(){
		var loaderImg = console.log("connect"); // картинка до загрузки
		var url = $(this).attr("href"); // получаем значение атрибута href ссылки 
		var rel = 'div#'+$(this).attr("rel"); // получаем значение атрибута rel ссылки
			$("div.vessel").html(loaderImg).html(function(){
						var a=loaderImg;
					$.ajax({ // запрашиваем данные со страницы-донора
						url:url,
						dataType:"html",
						async:false,
						success:function(b){a=$(b).find(rel)},  // извлекаем html из нужного элемента (в примере <div id="victim">)
						error:function(){alert("Ajax!Ошибка.")}
						});
						return a;
			});
		return false;
	});

	$('.postForm').hide();
	$('#g_add_post').click(function(){
		$('.postForm').slideToggle();
	});
});