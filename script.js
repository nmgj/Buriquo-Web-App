document.addEventListener('DOMContentLoaded', function () {
  var links = document.querySelectorAll('.site-nav a');
  links.forEach(function (link) {
    link.addEventListener('click', function () {
      document.body.classList.remove('menu-open');
    });
  });
});
