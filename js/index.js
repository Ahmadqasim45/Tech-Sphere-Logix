document.addEventListener('DOMContentLoaded', () => {
    // Portfolio isotope and filter
    let portfolioContainer = document.querySelector('.portfolio-container');
    if (portfolioContainer) {
        let portfolioIsotope = new Isotope(portfolioContainer, {
            itemSelector: '.portfolio-item'
        });
  
        let portfolioFilters = document.querySelectorAll('#portfolio-flters li');
        portfolioFilters.forEach(filter => {
            filter.addEventListener('click', function (e) {
                e.preventDefault();
                portfolioFilters.forEach(el => el.classList.remove('filter-active'));
                this.classList.add('filter-active');
  
                portfolioIsotope.arrange({
                    filter: this.getAttribute('data-filter')
                });
            });
        });
    }
  
    // Initiate portfolio lightbox
    const portfolioLightbox = GLightbox({
        selector: '.portfolio-lightbox'
    });
  
    // Portfolio details slider
    new Swiper('.portfolio-details-slider', {
        speed: 400,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });
  });
  