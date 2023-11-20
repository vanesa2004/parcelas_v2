
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

/*========================================
Validamos el formulario de registro
==========================================*/

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

/*========================================
Agregar class error input
==========================================*/
//a esta funcion le pasamos un array

function inputError(datos){
    for (let i = 0; i < datos.length; i++) {

        //a cada input le agregamos una clase error
        datos[i].classList.add('input-error');

    } 
    
}