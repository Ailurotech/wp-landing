
document.addEventListener('DOMContentLoaded', () => {
  console.log('Ailurotech theme JavaScript loaded!');

  // Example of a simple DOM manipulation
  const navLinks = document.querySelectorAll('nav a');
  navLinks.forEach(link => {
    link.addEventListener('mouseover', () => {
      link.style.color = '#ff6347';
    });

    link.addEventListener('mouseout', () => {
      link.style.color = '#fff';
    });
  });

  // Example of a function that could be used across the site
  function toggleMenu() {
    const menu = document.querySelector('.menu');
    if (menu) {
      menu.classList.toggle('active');
    }
  }

  const menuButton = document.querySelector('.menu-button');
  if (menuButton) {
    menuButton.addEventListener('click', toggleMenu);
  }
});
