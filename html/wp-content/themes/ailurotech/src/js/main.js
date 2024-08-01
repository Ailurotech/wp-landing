document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector('.navbar-toggle .toggle-icon');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    toggleButton.addEventListener('click', function () {
        dropdownMenu.classList.toggle('active');
    });

    function initializeFlickity() {
        let groupCells;
        if (window.innerWidth < 650) {
            groupCells = 1;
        } else if (window.innerWidth < 1050) {
            groupCells = 2;
        } else {
            groupCells = 3;
        }

        return new Flickity('.carousel-footer', {
            cellAlign: 'left',
            groupCells: groupCells,
            selectedAttraction: 0.01,
            friction: 0.15,
            wrapAround: true
        });
    }

    let flkty = initializeFlickity();

    function debounce(func, wait) {
        let timeout;
        return function() {
            clearTimeout(timeout);
            timeout = setTimeout(func, wait);
        };
    }

    const handleResize = debounce(function() {
        let groupCells;
        if (window.innerWidth < 650) {
            groupCells = 1;
        } else if (window.innerWidth < 1050) {
            groupCells = 2;
        } else {
            groupCells = 3;
        }
        flkty.options.groupCells = groupCells;
        flkty.reloadCells();
        flkty.resize();
    }, 250);

    window.addEventListener('resize', handleResize);
});

