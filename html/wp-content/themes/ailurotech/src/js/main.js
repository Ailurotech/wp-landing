document.addEventListener('DOMContentLoaded', function () {
  const toggleButton = document.querySelector('.navbar-toggle .toggle-icon');
  const dropdownMenu = document.querySelector('.dropdown-menu');

  toggleButton.addEventListener('click', function () {
      dropdownMenu.classList.toggle('active');
  });
});
//carousel section
var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
  // options
  cellAlign: 'left',
  contain: true,
  wrapAround: true
  
});