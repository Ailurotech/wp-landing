
//subscription
document.addEventListener('DOMContentLoaded', function() {
    var toggleSwitch = document.getElementById('toggle-switch');

    
    toggleSwitch.addEventListener('change', function() {
        var options = document.querySelectorAll('.option'); 

        options.forEach(function(optionElement) {
            var priceElement = optionElement.querySelector('.price');
            var periodElement = optionElement.querySelector('.period');

            if (toggleSwitch.checked) {
                priceElement.textContent = '$' + optionElement.dataset.monthly;
                periodElement.textContent = '/ Month';
            } else {
                priceElement.textContent = '$' + optionElement.dataset.yearly;
                periodElement.textContent = '/ Year';
                console.log('Switched to "Pay Yearly"');
            }
        });
    });
});







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


