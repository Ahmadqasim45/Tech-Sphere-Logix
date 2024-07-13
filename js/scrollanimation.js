// scripts.js

// Create a link element to load the AOS CSS
const aosCss = document.createElement('link');
aosCss.rel = 'stylesheet';
aosCss.href = 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css';
document.head.appendChild(aosCss);

// Create a script element to load the AOS JS
const aosScript = document.createElement('script');
aosScript.src = 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js';
aosScript.onload = () => {
    // Initialize AOS after the script has loaded
    AOS.init({
        duration: 1200, // Animation duration
        once: true,     // Whether animation should happen only once - while scrolling down
        mirror: false   // Whether elements should animate out while scrolling past them
    });
};
document.body.appendChild(aosScript);
