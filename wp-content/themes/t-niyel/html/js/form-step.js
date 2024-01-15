$(document).ready(function(){
	var current = 1,
		active_step,
		next_step,
		the_steps;
	the_steps = $('.kl-form-page').length;
	$('.kl-form-footer a').click(function(e){
		active_step = $(this).closest('.kl-form-page');
		next_step = active_step.next();
		next_step.show();
		active_step.removeClass('kl-active');
		next_step.addClass('kl-active');
		active_step.hide();
		setProgressBar(++current);
		$('.kl-prev-form').show();
		e.preventDefault();
	});
	$('.kl-prev-form').click(function(e){
		active_step = $('.kl-active').closest('.kl-form-page');
		next_step = active_step.prev();
		next_step.show();
		active_step.removeClass('kl-active');
		next_step.addClass('kl-active');
		active_step.hide();
		setProgressBar(--current);
		
		if($('.kl-page-1').hasClass('kl-active')){
			$(this).hide();
		}
		e.preventDefault();
	});
	$('.kl-next-form').click(function(e){
		$('.kl-active .kl-form-footer a').trigger('click');
		e.preventDefault();
	});
	
	setProgressBar(current);
	
	function setProgressBar(curStep){
		var percent = parseFloat(100 / the_steps) * curStep;
		percent = percent.toFixed();
		$('.kl-form-appli-progressbar-percentage').css('width',percent+'%');
		$('.kl-form-appli-progressbar-text').html(percent+'%');
		$('.kl-step-current').html(curStep);
		$('.kl-step-page-count').html(the_steps);
	}
});

