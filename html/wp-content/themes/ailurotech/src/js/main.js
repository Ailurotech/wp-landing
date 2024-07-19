document.addEventListener('DOMContentLoaded', function () {
  const toggleButtons = document.querySelectorAll('.toggle-button');
  const subscriptionOptions = document.querySelectorAll('.option');

  toggleButtons.forEach(button => {
      button.addEventListener('click', function () {
          const isYearly = this.id === 'yearly';
          toggleButtons.forEach(btn => btn.classList.remove('active'));
          this.classList.add('active');

          subscriptionOptions.forEach(option => {
              const priceSpan = option.querySelector('.price');
              const price = isYearly ? option.getAttribute('data-yearly') : option.getAttribute('data-monthly');
              priceSpan.textContent = price;
          });
      });
  });

  // Trigger click on the default selected button
  document.getElementById('monthly').click();
});
