
/*========================================
Tabs Formulario
==========================================*/
const tabLink=document.querySelectorAll('.tab-link');
const formularios=document.querySelectorAll('.formulario');

for (let x = 0; x < tabLink.length; x++) {
    
    tabLink[x].addEventListener('click',()=>{

        //removemos la clase active de todos los tabs encotrados
        tabLink.forEach((tab)=> tab.classList.remove('active'));

        //le agregamos la clase active al tab que se le hizo click
        tabLink[x].classList.add('active');

        //mostramos el formulario correspondiente
        //para los formularios funciona exactamente los mismo que los tabs
        formularios.forEach((form)=>form.classList.remove('active'));
        formularios[x].classList.add('active');
       
    })
}

/*
    CREAMOS FUNCIONES PARA MOSTRAR ERROR EN PANTALLA Y ADEMAS VALIDAR SI LOS CAMPOS SON INGRESADOS CORECTAMENTE
*/

/*========================================
Mostrar Error
==========================================*/
function mostrarError(mensaje,msError){

    //agregamos la clase active
    msError.classList.add('active');

    msError.innerHTML='<p>'+mensaje+'</p>';
}

// validaciones del registro numero de telefono -------------------------------------------------------
document.getElementById("formRegistro").addEventListener("submit", function(event) {
    var telefono = document.getElementsByName("num-tlfono")[0].value;
    var telefonoError = document.getElementById("telefonoError");

    // Expresión regular para verificar que el número tenga exactamente 10 dígitos
    var telefonoValido = /^\d{10}$/;

    if (!telefonoValido.test(telefono)) {
        telefonoError.textContent = "El número de teléfono debe tener exactamente 10 dígitos numéricos.";
        event.preventDefault(); // Evita que el formulario se envíe si la validación falla
    } else {
        telefonoError.textContent = ""; // Borra el mensaje de error si la validación es exitosa
    }
});

// validaciones del registro fecha de nacimiento -------------------------------------------------------
document.getElementById('btnRegistro').addEventListener('click', function() {
    // Obtener la fecha de nacimiento ingresada por el usuario
    let fechaNacimiento = document.getElementById('fecha-nacimiento').value;

    // Calcular la fecha actual
    let hoy = new Date();
    let fechaActual = hoy.getFullYear() + '-' + ('0' + (hoy.getMonth() + 1)).slice(-2) + '-' + ('0' + hoy.getDate()).slice(-2);

    // Calcular la diferencia de tiempo entre la fecha de nacimiento y la fecha actual
    let edad = hoy.getFullYear() - new Date(fechaNacimiento).getFullYear();
    let m = hoy.getMonth() - new Date(fechaNacimiento).getMonth();
    if (m < 0 || (m === 0 && hoy.getDate() < new Date(fechaNacimiento).getDate())) {
        edad--;
    }

    // Validar si la edad es menor a 18 años
    if (edad < 18) {
        alert('Debes tener al menos 18 años para registrarte.');
        // Evitar que se realice el registro
        event.preventDefault();
    }
});