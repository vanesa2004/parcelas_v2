function openTab(tabName) {
    var i, tabContent;

    tabContent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    document.getElementById(tabName).style.display = "block";
}

document.addEventListener("DOMContentLoaded", function() {
    openTab("mi-cuenta"); // Mostrar la pestaña "Inicio" por defecto al cargar la página
});