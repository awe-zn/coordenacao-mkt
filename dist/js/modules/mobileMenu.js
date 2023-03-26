export default function initMobileMenu() {
  const navbarToggleButtons = Array.from(
    document.querySelectorAll('[data-menu]')
  );

  navbarToggleButtons.forEach((navbarToggleButton) => {
    navbarToggleButton.addEventListener('click', handleNavbarToggle);
  });

  function handleNavbarToggle(e) {
    const navbar = document.getElementById(e.currentTarget.dataset.menu);
    navbar.classList.toggle('hidden');

    const body = document.querySelector('body');
    if (navbar.classList.contains('hidden')) {
      body.classList.remove('overflow-hidden');
    } else {
      body.classList.add('overflow-hidden');
    }
  }
}
