document.addEventListener('DOMContentLoaded', function () {
  const navLinks = document.querySelectorAll('.site-nav a');
  const sections = document.querySelectorAll('main section[id]');

  function setActiveLink() {
    const offset = window.scrollY + 120;
    sections.forEach((section) => {
      const top = section.offsetTop;
      const height = section.offsetHeight;
      const id = section.getAttribute('id');

      if (offset >= top && offset < top + height) {
        navLinks.forEach((link) => link.classList.remove('active'));
        const activeLink = document.querySelector(`.site-nav a[href="#${id}"]`);
        if (activeLink) {
          activeLink.classList.add('active');
        }
      }
    });
  }

  window.addEventListener('scroll', setActiveLink);
  setActiveLink();
});
