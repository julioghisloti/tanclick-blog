$(document).ready(function() {
	$('.destaques').children().hover(function() {
		$(this).siblings().stop().fadeTo(200,0.2);
	}, function() {
		$(this).siblings().stop().fadeTo(200,1);
	});
});