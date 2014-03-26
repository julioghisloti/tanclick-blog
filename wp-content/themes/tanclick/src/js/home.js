//Slider
$(function(){
	$('.slider ul').cycle({
		fx:    'fade',
		speed: 800,
		prev:   '#prev', 
		next:   '#next', 
    	timeout:  0
	});
});

//Destaques
$(document).ready(function() {
	$('.destaques').children().hover(function() {
		$(this).siblings().stop().fadeTo(200,0.2);
	}, function() {
		$(this).siblings().stop().fadeTo(200,1);
	});
});
