document.addEventListener('DOMContentLoaded', function () {
    // Initialize GLightbox
    const portfolioLightbox = GLightbox({
        selector: '.glightbox'
    });

    // Initialize Isotope
    let portfolioContainer = document.querySelector('.portfolio-container');
    if (portfolioContainer) {
        let portfolioIsotope = new Isotope(portfolioContainer, {
            itemSelector: '.portfolio-item'
        });

        let portfolioFilters = document.querySelectorAll('#portfolio-filters li');

        portfolioFilters.forEach(function (filter) {
            filter.addEventListener('click', function () {
                portfolioFilters.forEach(function (el) {
                    el.classList.remove('filter-active');
                });
                this.classList.add('filter-active');

                portfolioIsotope.arrange({
                    filter: this.getAttribute('data-filter')
                });
            });
        });
    }
});