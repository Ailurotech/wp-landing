document.addEventListener('DOMContentLoaded', function () {
  const toggleButton = document.querySelector('.navbar-toggle .toggle-icon');
  const dropdownMenu = document.querySelector('.dropdown-menu');

  toggleButton.addEventListener('click', function () {
      dropdownMenu.classList.toggle('active');
  });
});


document.addEventListener('DOMContentLoaded', function() {
  var links = document.querySelectorAll('.link'); // Select all elements with class "link"
  links.forEach(function(link) {
      link.addEventListener('click', function() { // Add click event listener to each link
          var itemName = this.getAttribute('id'); // Get the id attribute of the clicked link
          if (itemName === 'about us') { // Check if the id is 'aboutus'
              window.open('https://www.google.com', '_blank'); // Open Google in a new tab
          }
      });
  });
});