$(document).ready(function(){

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
	$('.g_add_post').click(function(){
		$('.postForm').stop(true,false).slideToggle();
	});
});