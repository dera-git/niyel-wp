$(document).ready(function(){
	$('.kl-slider-text-full-inline .kl-text-block').each(function(index, letter){
		setTimeout(function(){
			$(letter).addClass('kl-show-item');
		}, index * 400);
	});
});