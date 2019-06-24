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
var minRate = "";
var mediumRate = "";
var maxRate = "";
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
	minRate = limiteinferior;
	mediumRate = valoresperado;
	maxRate = limitesuperior;
	$('.jm-valores').removeClass('active');
	$('.jm-metricas').addClass('active');
	// getGraphicMetric(minRate,mediumRate,maxRate);
	// $.ajax({
	// 	data : {Limitesuperior  : limitesuperior,
	// 			Limiteinferior  : limiteinferior,
	// 			Valoresperado	: valoresperado},
	// 	url  : 'home/register',
	// 	type : 'POST'
	// }).done(function(data){
	// 	try {
	// 		data = JSON.parse(data);
	// 		if(data.error == 0){
	// 			$('.js-input').find('input').val('');
	// 			getGraphicMetric(limiteinferior,valoresperado,limitesuperior);
    //     	}else{
    //     		msj('error', data.msj);
    //     		return;
    //     	}
	// 	} catch (err) {
	// 		msj('error', err.message);
	// 	}
	// });
}
var arrayValores = [];
// var jsonValores = "";
function sendValores(){
	var valor 	= $('#valor').val();
	if(valor == null || valor == '') {
		msj('error', 'Valor debe completarse');
		return;
	}
	arrayValores.push(parseInt(valor));
	// console.log(arrayValores);
	// var jsonValores = JSON.stringify(arrayValores);
	getGraphicMetric();
	// $.ajax({
	// 	data : {Valor  : valor},
	// 	url  : 'home/valor',
	// 	type : 'POST'
	// }).done(function(data){
	// 	try {
	// 		data = JSON.parse(data);
	// 		if(data.error == 0){
	// 			$('.js-input').find('input').val('');
	// 			msj('success', data.msj);
    //     	}else{
    //     		msj('error', data.msj);
    //     		return;
    //     	}
	// 	} catch (err) {
	// 		msj('error', err.message);
	// 	}
	// });
}
function getGraphicMetric(){
	Highcharts.chart('container', {
		title: {
			text: 'Sistema de Gestion de Calidad'
		},
		subtitle: {
			text: 'Métricas de calidad basado en la estandarización de código fuente de clases.'
		},
		yAxis: {
			title: {
				text: 'Exchange rate'
			},
			plotLines: [{
				value: minRate,
				color: 'red',
				dashStyle: 'shortdash',
				width: 2,
				label: {
					text: 'Limite Inferior'
				}
			}, {
				value: mediumRate,
				color: 'black',
				dashStyle: 'shortdash',
				width: 2,
				label: {
					text: 'Valor esperado'
				}
			}, {
				value: maxRate,
				color: 'green',
				dashStyle: 'shortdash',
				width: 2,
				label: {
					text: 'Limite Superior'
				}
			}]
		},
		legend: {
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'middle'
		},
		plotOptions: {
			series: {
				label: {
					connectorAllowed: false
				},
				pointStart: 2010
			}
		},
		series: [{
			name: 'Limite Superior',
			data: arrayValores
			// data: [4, 5, 6, 8, 7]
		}],
		responsive: {
			rules: [{
				condition: {
					maxWidth: 500
				},
				chartOptions: {
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom'
					}
				}
			}]
		}
	});
	console.log(arrayValores);
}