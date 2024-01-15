(function($) {
    "use strict";
    $(document).ready(function(){
        function isIntersecting(element, callback) {
            const sides = () => element.getBoundingClientRect();
            const invoque = () => callback(
                !(sides().top > window.innerHeight || sides().bottom < 0),
                element
            );
            invoque();
            window.addEventListener('scroll', callback && invoque);
            window.addEventListener('resize', callback && invoque);
        }

        function appendSpan(letter, j) {
            let span = document.createElement('span');
            this.appendChild(span);
            span.innerText = letter;
            span.style.setProperty('--index', `${j}s`);
        }

        function spanify(element, i) {
            const letters = element.innerText.split('');
            element.innerHTML = '';
            letters.forEach(appendSpan.bind(element));
            appendSpan.call(element, '_', letters.length);
        }

        function setWritingMachine(element, i) {
            const writingMachines = this;
            spanify(element, i);
            isIntersecting(element, (intersects, e) => {
                if (intersects && !e.classList.contains('show')) {
                    e.classList.add('show');

                    const lastBlink = document.querySelector('.blink');
                    if (e !== lastBlink && lastBlink) lastBlink.className = '';

                    const LIC = e.children;
                    LIC[LIC.length-1].className = 'blink';

                    return;
                } else if(!intersects) {
                    e.classList.remove('show');
                }
            });
        }

        function invoqueWritingMachines() {
            const writingMachines = [...document.getElementsByClassName('kl-writing-machine')];

            writingMachines.forEach(setWritingMachine);
        }

        invoqueWritingMachines();
    });
})(jQuery);