var $win = $(window);
$win.scroll(function () {
	if ($win.scrollTop() > 45) {
		$(".js-header").addClass("navbarcolor");
	} else {
		$(".js-header").removeClass("navbarcolor");
	}
});
$('a.link[href^="#"]').click(function(e) {
 	var target = $(this).attr('href');
 	var strip = target.slice(1);
 	var anchor = $("section[id='" + strip + "']");
 	e.preventDefault();
 	y = (anchor.offset() || {
 		"top" : NaN
 	}).top;
 	$('html, body').animate({
 		scrollTop : (y - 40)
 	}, 'slow');
});
$('#home .owl-carousel').owlCarousel({
	lazyLoad : true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	responsive : {
		0 : {
			items : 1
		}
	},
	navigation : false,
	nav : false,
	loop : true,
	autoplay : true,
	mouseDrag: false,
	dots: false,
	autoplayTimeout : 3000
});
var arrayLimiteInferior = [];
var arrayLimiteSuperior = [];
var arrayValorEspero =[];
var arrayValores = [];
function sendMetricas(){
	var limitesuperior 	= $('#limitesuperior').val();
	var limiteinferior  = $('#limiteinferior').val();
	var valoresperado 	= $('#valoresperado').val();
	if(limitesuperior == null || limitesuperior == '') {
		msj('error', 'Limite superior debe completarse');
		return;
	}
	if(limiteinferior == null || limiteinferior == '') {
		msj('error', 'Limite inferior debe completarse');
		return;
	}
	if(valoresperado == null || valoresperado == '') {
		msj('error', 'Valor esperado debe completarse');
		return;
	}
	arrayLimiteInferior.push(limiteinferior);
	arrayLimiteSuperior.push(limitesuperior);
	arrayValorEspero.push(valoresperado);
	$.ajax({
		data : {Limitesuperior  : limitesuperior,
				Limiteinferior  : limiteinferior,
				Valoresperado	: valoresperado},
		url  : 'home/register',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				
				$('.js-input').find('input').val('');
				msj('success', data.msj);
        	}else{
        		msj('error', data.msj);
        		return;
        	}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
function sendValores(){
	var valor 	= $('#valor').val();
	if(valor == null || valor == '') {
		msj('error', 'Valor debe completarse');
		return;
	}
	$.ajax({
		data : {Valor  : valor},
		url  : 'home/valor',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				$('.js-input').find('input').val('');
				msj('success', data.msj);
        	}else{
        		msj('error', data.msj);
        		return;
        	}
		} catch (err) {
			msj('error', err.message);
		}
	});
}