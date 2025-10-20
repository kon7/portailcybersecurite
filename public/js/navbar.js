// navbar.js
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".nav-item.dropdown");

  dropdowns.forEach((dropdown) => {
    const toggle = dropdown.querySelector(".dropdown-toggle");

    // Affichage au survol (desktop uniquement)
    dropdown.addEventListener("mouseenter", function () {
      if (window.innerWidth > 992) {
        const bsDropdown = new bootstrap.Dropdown(toggle);
        bsDropdown.show();
      }
    });

    // Fermeture quand la souris quitte (desktop)
    dropdown.addEventListener("mouseleave", function () {
      if (window.innerWidth > 992) {
        const bsDropdown = bootstrap.Dropdown.getInstance(toggle);
        if (bsDropdown) bsDropdown.hide();
      }
    });

    // Sur mobile, clic normal (Bootstrap gère nativement)
  });

  // Fermer dropdown quand on clique ailleurs
  document.addEventListener("click", function (e) {
    if (!e.target.closest(".nav-item.dropdown")) {
      const openDropdown = document.querySelector(".dropdown-menu.show");
      if (openDropdown) {
        const toggle = openDropdown.parentElement.querySelector(".dropdown-toggle");
        const bsDropdown = bootstrap.Dropdown.getInstance(toggle);
        if (bsDropdown) bsDropdown.hide();
      }
    }
  });
});

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.alert-row').forEach(row => {
    row.addEventListener('click', () => {
      const url = row.getAttribute('data-href');
      if (url) {
        window.location.href = url;
      }
    });
  });
});
