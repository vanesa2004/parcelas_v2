function openTab(tabName) {
    var i, tabContent;

    tabContent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    document.getElementById(tabName).style.display = "block";

    // Ocultar el menú móvil
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.remove('open');
}

function toggleMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('open');
}

// Mostrar la pestaña "Inicio" por defecto al cargar la página
document.addEventListener("DOMContentLoaded", function() {
    openTab("inicio");
});