function openModal() {
    var modal = document.getElementById("modal");
    modal.style.display = "block";
}

function closeModal() {
    var modal = document.getElementById("modal");
    modal.style.display = "none";
}

// Contador para los campos de cultivo
var contadorCultivos = 0;

// Función para agregar campos de cultivo
function agregarCultivo() {
    // Obtén el contenedor de cultivos
    var contenedorCultivos = document.getElementById("contenedor-cultivos");

    // Clona la estructura
    var nuevaCultura = document.querySelector(".cultivo-ed").cloneNode(true);

    // Agrega el clon al contenedor de cultivos
    contenedorCultivos.appendChild(nuevaCultura);
}

// Event listener para el botón "Agregar Cultivo"
var agregarCultivoButton = document.getElementById("agregar-edit");
agregarCultivoButton.addEventListener("click", agregarCultivo);