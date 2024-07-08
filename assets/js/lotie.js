var animation = lottie.loadAnimation({
    container: document.getElementById('lottie-animation'), // the DOM element to render the animation
    renderer: 'svg', // render type (svg/canvas/html)
    loop: true, // whether to loop the animation
    autoplay: true, // whether to start the animation automatically
    path: 'animation.json' // the path to the animation json
});
