$(document).ready(function(){

	$('.postForm').hide();
	$('.g_add_post').click(function(){
		$('.postForm').stop(true,false).slideToggle();
	});

	$("a.loot").on("click", function(e){
		var pageurl = $(this).attr("href"); 	// получаєм значення атрибута href силки
		var rel = 'div#'+$(this).attr("rel");   // получаєм значення атрибута rel силки

		$('div.vessel').html(function(){
			$.ajax({
				url:pageurl,
				async:false,
				success:function(b){
					a=$(b).find(rel);
				},
				error:function(){alert("Ajax!Ошибка.")}
			});

			if(pageurl != window.location){
				window.history.pushState({path:pageurl}, '', pageurl);
			}

			$(window).bind('popstate', function() {
				$.ajax({
					url:location.pathname,
					success: function(data){
						a = $("body").html(data);
					}
				});
			});
		return a;
		});
		e.preventDefault();    // недає спрацювати ссилці
	});

});

