// Función para abrir la ventana modal
function openModalCambiar() {
    var modal = document.getElementById("modal-cambiar");
    modal.style.display = "block";
}

// Función para cerrar la ventana modal
function closeModalCambiar() {
    var modal = document.getElementById("modal-cambiar");
    modal.style.display = "none";
}

// Agrega un evento de clic al botón "Cambiar mis datos"
var abrirModalButtonCambiar = document.getElementById("abrir-modal-cambiar");
abrirModalButtonCambiar.addEventListener("click", openModalCambiar);