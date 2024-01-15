const element_text_impact = document.querySelectorAll('.kl-slider-text-full-inline .kl-text-block');

function animateElement(element){
	let index = 0;
	setInterval(() => {
		if (index < element.length) {
			element[index].classList.add('kl-show-item');
			index++;
		} else {
			clearInterval(animateElement);
			animateChildElement();
		}
	}, 800);
}

function animateChildElement() {
	const childrenElements = document.querySelectorAll('.kl-slider-text-full-inline .kl-text-extension');
	childrenElements.forEach((child, index) => {
		setTimeout(() => {
			child.classList.add('kl-show-item');
		}, index * 800)
	});
}

new Waypoint({
	element: element_text_impact,
	handler: function() {
		animateElement(element_text_impact);
	},
	offset: 'bottom-in-view'
});