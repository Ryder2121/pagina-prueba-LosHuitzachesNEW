$(document).ready(function(){

//escalar logotipo inicio
	$("#banner").css({"height":$(window).height()+ "px"});

	var flag = false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

		if(scroll > 150){
			if(!flag){
				$("#logo").css({"margin-top": "-5px", "width": "150px"});
				
				$("header").css({"background-color" : "#3C3C3C", "z-index" : "1000"})
				flag = true;
			}
		} 
		else {
			if(flag){
				$("#logo").css({"margin-top": "18%", "width": "500px"});
				
				$("header").css({"background-color" : "transparent", "z-index" : "0"})
				flag = false;
			}
		}

	});


//efecto paralax
	$(window).scroll(function(){
		var barra = $(window).scrollTop();
		var posicion = barra * 0.40;

		$("#banner").css({
			'background-position' : '0 -' + posicion + 'px'

		});
	});



});