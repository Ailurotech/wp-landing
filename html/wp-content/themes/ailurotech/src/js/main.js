document.addEventListener('DOMContentLoaded', function () {
  const toggleButton = document.querySelector('.navbar-toggle .toggle-icon');
  const dropdownMenu = document.querySelector('.dropdown-menu');

  toggleButton.addEventListener('click', function () {
      dropdownMenu.classList.toggle('active');
  });
});
//carousel section
document.addEventListener('DOMContentLoaded', function() {
  var elem = document.querySelector('.main-carousel');
  var flkty = new Flickity(elem, {
      cellAlign: 'left',
      contain: true,
      wrapAround: true
  });
  setTimeout(function() {
      flkty.resize();
  }, 100);
});
