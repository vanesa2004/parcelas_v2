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
    const tabHash = window.location.hash;

    if (tabHash) {
        const tabName = tabHash.slice(1); // Eliminar el '#' del hash
        openTab(tabName); // Muestra la pestaña correspondiente al hash
    } else {
        openTab("inicio"); // Si no hay hash, muestra la pestaña "Inicio" por defecto
    }
});

function cerrarMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.remove('open');
}

// Llama a esta función después de que el usuario se registre exitosamente
// Para redirigirlo a la pestaña 'mi-cuenta' luego del registro
function redirigirAMiCuenta() {
    window.location.hash = '#mi-cuenta';
}