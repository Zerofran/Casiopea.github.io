// Selecciona el elemento HTML con la clase "menu-toggle" y lo asigna a la variable "menuToggle".
const menuToggle = document.querySelector(".menu-toggle");

// Selecciona el elemento HTML con la clase "menu nav" y lo asigna a la variable "menuNav".
const menuNav = document.querySelector(".menu nav");

// Agrega un evento "click" al elemento con clase "menu-toggle" que se activará cuando se haga clic en él.
menuToggle.addEventListener("click", function() {
    // Cuando se hace clic en "menu-toggle", se ejecuta esta función anónima.

    // Alterna la clase "show-menu" en el elemento con clase "menu nav".
    // Si "show-menu" está presente, se quitará; si no está presente, se agregará.
    menuNav.classList.toggle("show-menu");
});






