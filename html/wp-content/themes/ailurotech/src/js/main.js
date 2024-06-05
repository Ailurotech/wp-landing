
document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('.navbar-toggle');
    const menu = document.querySelector('.navbar-menu');

    toggle.addEventListener('click', function () {
        menu.classList.toggle('active');
    });
});