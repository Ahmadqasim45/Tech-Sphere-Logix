particlesJS('particles-js', {
  "particles": {
    "number": {
      "value": 150,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#fff"  // Change to your brand color
    },
    "shape": {
      "type": "circle",  // Keep it simple and professional
      "stroke": {
        "width": 5,
        "color": "#fff"
      },
      "polygon": {
        "nb_sides": 10  // Hexagon shape for a modern look
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.6,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.3,
        "sync": false
      }
    },
    "size": {
      "value": 4,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 10,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#fff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"  // Enables grab effect on hover
      },
      "onclick": {
        "enable": true,
        "mode": "push"  // Enables push effect on click
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 200,  // Distance to grab particles
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 200,  // Distance for bubble effect
        "size": 20,       // Bubble size
        "duration": 1,    // Bubble effect duration
        "opacity": 0.8,
        "speed": 3
      },
      "repulse": {
        "distance": 100   // Distance to repulse particles
      },
      "push": {
        "particles_nb": 4  // Number of particles to push on click
      },
      "remove": {
        "particles_nb": 2  // Number of particles to remove on click
      }
    }
  },
  "retina_detect": true,
  "config_demo": {
    "hide_card": false,
    "background_color": "#fff",  // Dark blue background
    "background_image": "",
    "background_position": "50% 50%",
    "background_repeat": "no-repeat",
    "background_size": "cover"
  }
});
