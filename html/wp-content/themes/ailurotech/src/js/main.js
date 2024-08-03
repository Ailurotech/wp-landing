// footer carousel
document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector('.navbar-toggle .toggle-icon');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    toggleButton.addEventListener('click', function () {
        dropdownMenu.classList.toggle('active');
    });

    function initializeFlickity(selector) {
        let groupCells;
        if (window.innerWidth < 650) {
            groupCells = 1;
        } else if (window.innerWidth < 1050) {
            groupCells = 2;
        } else {
            groupCells = 3;
        }

        return new Flickity(selector, {
            cellAlign: 'left',
            groupCells: groupCells,
            selectedAttraction: 0.01,
            friction: 0.15,
            wrapAround: true
        });
    }

    const carousels = document.querySelectorAll('.carousel-footer');
    const flickityInstances = [];

    carousels.forEach(carousel => {
        flickityInstances.push(initializeFlickity(carousel));
    });

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

        flickityInstances.forEach(flkty => {
            flkty.options.groupCells = groupCells;
            flkty.reloadCells();
            flkty.resize();
        });
    }, 250);

    window.addEventListener('resize', handleResize);
});

function hideTeamSection() {
    const teamSection = document.querySelector('.team-section');
    if (teamSection) {
        teamSection.style.display = 'none';
    }
}

function hideCustomerSection() {
    const customerSection = document.querySelector('.customer-section');
    if (customerSection) {
        customerSection.style.display = 'none';
    }
}




