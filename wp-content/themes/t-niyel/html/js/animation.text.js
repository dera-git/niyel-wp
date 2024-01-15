const text = document.querySelector('.kl-text-replace-random');
const texts = text.dataset.text.split(",");

document.addEventListener('DOMContentLoaded', () => {
    text.innerHTML = texts[0]
})

let animation = bodymovin.loadAnimation({
    container: document.getElementById('id-animation'), // Required
    path: './js/animation.json', // Required
    renderer: 'svg', // Required
    loop: true, // Optional
    autoplay: true, // Optional
})

animation.setSpeed(1)

animation.addEventListener('loopComplete', () => {
    setTimeout(() => {
        changeText()
        resetAnimation()
    }, 1500)
})

const changeText = () => {
    let searchTerm =  text.innerHTML  ;
    let index = texts.indexOf(searchTerm)+1;
    if(index == texts.length ) index = 0;
    let result = texts[index];
    text.innerHTML = result;
    return;
}

const resetAnimation = () => {
    text.style.animation = "none";
    text.offsetHeight;
    text.style.animation = null;
}