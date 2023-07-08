// Obtener el elemento del botón de navegación
var navbarToggler = document.querySelector(".navbar-toggler");

// Obtener todos los elementos de enlace del menú
var navLinks = document.querySelectorAll(".nav-link");

// Agregar un evento de clic a cada enlace del menú
navLinks.forEach(function (navLink) {
  navLink.addEventListener("click", function () {
    // Verificar si el menú está abierto
    if (navbarToggler.getAttribute("aria-expanded") === "true") {
      // Cerrar el menú
      navbarToggler.click();
    }
  });
});

// // Obtén todos los enlaces del navbar
// const navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');

// // Crea un objeto IntersectionObserver
// const observer = new IntersectionObserver(entries => {
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       // Obtiene el atributo 'href' del enlace correspondiente a la sección visible
//       const targetId = entry.target.getAttribute('id');
//       const activeLink = document.querySelector(`.navbar-nav .nav-link[href="#${targetId}"]`);

//       // Quita la clase 'active' de todos los elementos <li> y luego agrega 'active' al elemento <li> correspondiente a la sección visible
//       navbarLinks.forEach(link => {
//         if (link.parentElement !== null) {
//           link.parentElement.classList.remove('active');
//         }
//       });

//       if (activeLink && activeLink.parentElement !== null) {
//         activeLink.parentElement.classList.add('active');
//       }
//     }
//   });
// });

// // Observa todas las secciones con el atributo 'id'
// document.querySelectorAll('section[id]').forEach(section => {
//   observer.observe(section);
// });

