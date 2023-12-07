<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcelas.com</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./css/parcelas.css">
</head>
<body>

    <header>

        <div class="options">

            <h1>Parcelas.com</h1>

            <div class="tab-container">
                <button class="tab" onclick="openTab('inicio')">Inicio</button>
                <button class="tab" onclick="openTab('parcelas')">Parcelas</button>
                <button class="tab" onclick="openTab('iniciar-sesion')">Iniciar Sesión</button>
                <button class="tab" onclick="openTab('mi-cuenta')">Mi Cuenta</button>
            </div>

            <!-- Menú de hamburguesa para dispositivos móviles -->
            <div class="hamburger-menu" onclick="toggleMenu()">☰</div>
            <div class="menu" id="mobile-menu">
                <div class="c-options">
                    <span class="close-modal-cambiar" onclick="cerrarMenu()">&times;</span>
                    <button class="tab" onclick="openTab('inicio')">Inicio</button>
                    <button class="tab" onclick="openTab('parcelas')">Parcelas</button>
                    <button class="tab" onclick="openTab('iniciar-sesion')">Iniciar Sesión</button>
                    <button class="tab" onclick="openTab('mi-cuenta')">Mi Cuenta</button>
                </div>
            </div>

        </div>

        <p>¿Quieres alquilar, vender o comprar tu parcela? <br> !Comienza aqui¡</p>

    </header>


    <div id="inicio" class="tab-content">
        <!-- Contenido de la pestaña Inicio -->
        
        <section class="content-inicio">

            <main class="acciones">

                <h3>Aqui puedes</h3>
    
                <p>Alquilar parcelas</p>
                <p>Comprar parcelas</p>
                <p>Vender parcelas</p>
    
            </main>
    
            <section class="container-bienvenida">
    
                <div class="bienvenida">
    
                    <h3>Bienvenido</h3>
                    <p> Parcelas.com, tu destino confiable para encontrar la parcela perfecta. Conectamos a propietarios 
                        de terrenos con compradores y arrendatarios en busca de oportunidades únicas. Explora nuestro amplio 
                        catálogo de parcelas en venta y alquiler, publica tus anuncios fácilmente, y da vida a tus proyectos. 
                    </p>
    
                </div>
    
                <div class="nuevas-parcelas">
    
                    <h3>Nuevas Parcelas</h3>

                    <a href="#parcela"><img src="./img/fondo_parcelas.jpg" alt="parcela"></a>
                    <img src="./img/fondo_parcelas.jpg" alt="parcela">
                    <img src="./img/fondo_parcelas.jpg" alt="parcela">
                    <img src="./img/fondo_parcelas.jpg" alt="parcela">
                    <img src="./img/tomate.png" alt="parcela">
    
                </div>
                
            </section>
    
            <aside class="articulos-relacionados">
    
                <h3>Articulos relacionados</h3>

                <div class="container-relacionados">

                    <article>

                        <h4>titulo articulo</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, </p>
                        <a href="">Ver mas...</a>
    
                    </article>

                    <article>

                        <h4>titulo articulo</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, </p>
                        <a href="">Ver mas...</a>
    
                    </article>

                    <article>

                        <h4>titulo articulo</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, </p>
                        <a href="">Ver mas...</a>
    
                    </article>

                </div>
    
            </aside>

        </section>

        <section class="content-iniciomovile">
    
            <section class="container-bienvenida">
    
                <div class="bienvenida">
    
                    <h3>Bienvenido</h3>
                    <p> Parcelas.com, tu destino confiable para encontrar la parcela perfecta. Conectamos a propietarios 
                        de terrenos con compradores y arrendatarios en busca de oportunidades únicas. Explora nuestro amplio 
                        catálogo de parcelas en venta y alquiler, publica tus anuncios fácilmente, y da vida a tus proyectos. 
                    </p>
    
                </div>

                <main class="acciones">

                    <h3>Aqui puedes</h3>
        
                    <p>Alquilar parcelas</p>
                    <p>Comprar parcelas</p>
                    <p>Vender parcelas</p>
        
                </main>
    
                <div class="nuevas-parcelas">
    
                    <h3>Nuevas Parcelas</h3>

                    <div class="parcelas-inicio">

                        <img src="./img/fondo_parcelas.jpg" alt="parcela">
                        <img src="./img/fondo_parcelas.jpg" alt="parcela">
                        <img src="./img/fondo_parcelas.jpg" alt="parcela">
                        <img src="./img/fondo_parcelas.jpg" alt="parcela">
                        <img src="./img/tomate.png" alt="parcela">

                    </div>
    
                </div>
                
            </section>

        </section>

    </div> 

    <div id="parcelas" class="tab-content">
        <!-- Contenido de la pestaña Parcelas -->
        <section class="container-parcelas">

            <article class="parcela">

                <div class="slider-container">
                    <div class="slider">
                      <img class="slider-image" src="./img/parcela1.png" alt="Imagen 1">
                      <img class="slider-image" src="img/parcela2.jpg" alt="Imagen 2">
                      <img class="slider-image" src="img/parcela3.jpg" alt="Imagen 3">
                      <!-- Agrega más imágenes según sea necesario -->
                    </div>
                    <button class="prev-button"><img src="./img/izquierda.svg" alt=""></button>
                    <button class="next-button"><img src="./img/derecha.svg" alt=""></button>
                </div>

                <div class="slider-popup" id="slider-popup">
                    <div class="c-slider">
                        <div class="slider">
                            <img class="slider-image" src="./img/parcela1.png" alt="Imagen 1">
                            <img class="slider-image" src="img/parcela2.jpg" alt="Imagen 2">
                            <img class="slider-image" src="img/parcela3.jpg" alt="Imagen 3">
                            <!-- Agrega más imágenes según sea necesario -->
                          </div>
                          <button class="close-button" id="close-button"><img src="./img/x.svg" alt=""></button>
                          <button class="prev-button-popup" id="prev-button-popup"><img src="./img/izquierda.svg" alt=""></button>
                          <button class="next-button-popup" id="next-button-popup"><img src="./img/derecha.svg" alt=""></button>
                    </div>
                </div>

                <h5>Nombre</h5>
                <p>Hectareas:</p>
                <p>Cultivos:</p>
                <p>Fecha de siembra:</p>
                <div class="cultivo">

                    <div class="cultivo-one">

                        <p>cultivo 1</p>
                        <p>fecha cultivo 1</p>

                    </div>

                    <div class="cultivo-one">

                        <p>cultivo 2</p>
                        <p>fecha cultivo 2</p>

                    </div>

                    <div class="cultivo-one">

                        <p>cultivo 2</p>
                        <p>fecha cultivo 2</p>

                    </div>

                    <div class="cultivo-one">

                        <p>cultivo 2</p>
                        <p>fecha cultivo 2</p>

                    </div>

                </div>

                <p>Fecha de la cosecha:</p>
                <div class="cultivo">

                    <div class="cultivo-one">

                        <p>cultivo 1</p>
                        <p>fecha cultivo 1</p>

                    </div>

                    <div class="cultivo-one">

                        <p>cultivo 1</p>
                        <p>fecha cultivo 1</p>

                    </div>

                </div>

                <p>Maquinaria:</p>
                <p>La parcela para: vende </p>
                <p>Ubicacion parcela:</p>

                <a class="contacto" href=""><img src="./img/whatsapp.svg" alt=""> Contactar</a>


            </article>

            <article class="parcela">

                <div class="slider-container">
                    <div class="slider">
                      <img class="slider-image" src="./img/parcela1.png" alt="Imagen 1">
                      <img class="slider-image" src="img/parcela2.jpg" alt="Imagen 2">
                      <img class="slider-image" src="img/parcela3.jpg" alt="Imagen 3">
                      <!-- Agrega más imágenes según sea necesario -->
                    </div>
                    <button class="prev-button"><img src="./img/izquierda.svg" alt=""></button>
                    <button class="next-button"><img src="./img/derecha.svg" alt=""></button>
                </div>

                <div class="slider-popup" id="slider-popup">
                    <div class="slider">
                      <img class="slider-image" src="./img/parcela1.png" alt="Imagen 1">
                      <img class="slider-image" src="img/parcela2.jpg" alt="Imagen 2">
                      <img class="slider-image" src="img/parcela3.jpg" alt="Imagen 3">
                      <!-- Agrega más imágenes según sea necesario -->
                    </div>
                    <button class="close-button" id="close-button"><img src="./img/x.svg" alt=""></button>
                    <button class="prev-button-popup" id="prev-button-popup"><img src="./img/izquierda.svg" alt=""></button>
                    <button class="next-button-popup" id="next-button-popup"><img src="./img/derecha.svg" alt=""></button>
                </div>

                <h5>Nombre</h5>
                <p><b>Hectareas:</b></p>
                <p><b>Cultivos:</b></p>
                <p>Fecha de siembra:</p>
                <div class="cultivo">

                    <div class="cultivo-one">

                        <p>cultivo 1</p>
                        <p>fecha cultivo 1</p>

                    </div>

                    <div class="cultivo-two">

                        <p>cultivo 1</p>
                        <p>fecha cultivo 1</p>

                    </div>

                </div>

                <p>Fecha de la cosecha:</p>
                <div class="cultivo">

                    <div class="cultivo-one">

                        <p>cultivo 1</p>
                        <p>fecha cultivo 1</p>

                    </div>

                    <div class="cultivo-two">

                        <p>cultivo 1</p>
                        <p>fecha cultivo 1</p>

                    </div>

                </div>

                <p>Maquinaria</p>
                <p>La parcela para: vende </p>
                <p>Ubicacion parcela</p>

                <a class="contacto" href=""><img src="./img/whatsapp.svg" alt=""> Contactar</a>


            </article>
           

        </section>
    </div>

    <div id="iniciar-sesion" class="tab-content">
        <!-- Contenido de la pestaña Iniciar Sesión -->
        
        <!--========================================
            Formularios
        ==========================================-->
        <div class="contenedor-texto">

            <div class="contenedor-form">

                <div class="texto">

                    <h1 class="titulo">¡Bienvenido a Parcelas.com!</h1>
                    <p>Accede a tu cuenta para aprovechar todas las ventajas. Comparte tus parcelas, encuentra compradores o inquilinos, y descubre todas las oportunidades en nuestra plataforma</p>

                </div>

                <div class="registros">

                    <!-- Tabs -->
                    <ul class="tabs-links">
                        <li class="tab-link active">Iniciar Sesión</li>
                        <li class="tab-link ">Registrate</li>
                    </ul>

                    <!--========================================
                        Formulario logue
                    ==========================================-->
                    <form method="POST" id="formLogin" class="formulario active">

                        <input id="usuario" type="text" placeholder="Usuario" class="input-text" name="usuario" autocomplete="off" required> 

                        <input id="contrasena" type="password" placeholder="Contraseña" name="contrasena" class="clave" required>

                        <a href="#" class="link">¿Ovidaste tu contraseña?</a>
                        <button class="btn" id="btnLogin"  onclick="openMiCuentaTab()">Ingresar</button>

                        <img class="image-login" src="img/imagen_login.png" alt="">

                    </form> 

                    <!-- JavaScript para manejar el inicio de sesión a través de AJAX -->
                    <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        document.getElementById("btnLogin").addEventListener("click", function(event) {
                            event.preventDefault(); // Evitar el comportamiento predeterminado del botón

                            // Obtener los valores de usuario y contraseña
                            var usuario = document.getElementById("usuario").value;
                            var contrasena = document.getElementById("contrasena").value;

                            // Crear un objeto XMLHttpRequest (XHR)
                            var xhr = new XMLHttpRequest();

                            // Configurar la solicitud
                            xhr.open("POST", "php/LoginParcelas.php", true);
                            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                            // Definir lo que se debe hacer cuando la solicitud se completa
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === XMLHttpRequest.DONE) {
                                    if (xhr.status === 200) {
                                        // Si la solicitud fue exitosa
                                        var response = xhr.responseText;
                                        // Manejar la respuesta del servidor, por ejemplo, mostrar un mensaje de éxito
                                        console.log(response);

                                        // Obtener la pestaña activa después del inicio de sesión
                                        var activeTab = xhr.getResponseHeader("Active-Tab");
                                        if (activeTab) {
                                            openTab(activeTab); // Abre la pestaña guardada
                                        }
                                    } else {
                                        // Si hay un error al procesar la solicitud
                                        console.error("Error al procesar la solicitud.");
                                    }
                                }
                            };

                            // Enviar la solicitud con los datos de inicio de sesión
                            xhr.send("usuario=" + usuario + "&contrasena=" + contrasena);
                        });
                    });
                    </script>
                    

                    <!--========================================
                        Formulario de Registro
                    ==========================================-->
                    <form action="php/RegistrosPropietarios.php" method="POST" id="formRegistro" class="formulario">

                        <div class="error-text ">
                            
                        </div>

                        <img class="img-reg-parcela" src="img/registro_parcelas.png" alt="">

                        <input type="text" placeholder="Nombre y Apellidos" class="nombre-completo campo" name="nombre" autocomplete="off" required> 

                        <div class="container-left-right">

                            <div class="register-left">

                                <select class="select campo" name="sexo" id="sexo" required>
                                    <option value="" disabled selected >Sexo</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                </select>
        
                                <input class="input-number campo" type="number" placeholder="Numero de telefono" name="num-tlfono" required>
                                <span id="telefonoError" style="color: red;"></span> <!-- Mensaje de error -->
                                <textarea class="descripcion campo" name="descripcionpersonal" id="descripcion-prsnal" cols="30" rows="10" placeholder="Descripción personal"></textarea>
    
                            </div>
    
                            <div class="register-right">
    
                                <div class="fech-nacimiento">
                                    <label for="fecha-nacimiento">Fecha de nacimiento:</label>
                                    <input class="nacimiento campo" type="date" id="fecha-nacimiento" name="fecha-nacimiento" required>
                                </div>
            
                                <input class="usuario-reg campo" type="text" placeholder="Usuario(con este inicia sesion)" name="usuario" required>
            
                                <input type="password" placeholder="Contraseña" name="password" class="password-reg campo" required>
                                <p id="password-message" style="color: red;"></p>

                                <button class="btn-register" id="btnRegistro">Crear Cuenta</button>                                  
    
                            </div>

                        </div>

                    </form>

                </div>


            </div>

        </div>

    </div>

    <div id="mi-cuenta" class="tab-content">
        <!-- Contenido de la pestaña Mi Cuenta -->


        <div class="container-micuenta">

            <div class="container-datos-parcelas">

                <div class="container-misdatos">

                    <h1>Mis datos</h1> 
                    <div class="close-sesion-movil">
                        <a href="#">Cerrar sesión</a>
                    </div>

                    <div class="see-datos">

                        <div class="date">
                            <p>Nombre</p>
                            <p>Fecha</p>
                        </div>

                        <div class="date">
                            <p>Usuario</p>
                            <p>Sexo</p>

                        </div>

                        <div class="date">
                            <p>Numero </p>
                            <p>contraseña</p>
                        </div>

                        <p class="descripcion-personal">Descripcion personal</p>

                        <div class="link-whtsapp">
                            <a href="#">Generar link de whatsApp</a>
                            <img src="img/flecha_derecha.svg" alt="">
                        </div>

                        <form class="form-lnk-whats" action="">

                            <input type="text" placeholder="Link de whatsApp" name="link">
                            <button>Publicar link</button>

                        </form>

                        <button class="cambiar-misdatos"  id="abrir-modal-cambiar" href="#">Cambiar mis datos <img src="img/cambiar_datos.svg" alt="cambiar-datos"></button>


                    </div>

                    <!-- Ventana modal oculta para cambiar mis datos-->
                    <div id="modal-cambiar" class="modal-cambiar">
                        <div class="modal-content-cambiar">
                            <span class="close-modal-cambiar" onclick="closeModalCambiar()">&times;</span>
                            <form class="form-cambiar-datos">
                                <h2>Cambiar mis datos</h2>

                                <div class="edit-datos">

                                    <div class="campo-edit">
                                        <input type="text" value="Usuario" name="usuario-adm">
                                        <input type="text" value="Contraseña" name="contrasena-adm">
                                    </div>

                                    <div class="campo-edit">
                                        <input type="text" value="Numero telefono" name="telefono-adm">
                                        <input type="text" value="Link" name="link-adm">
                                    </div>

                                    <div class="campo-edit">
                                        <textarea name="descripcion-adm" id="" cols="30" rows="10">Descripcion personal</textarea>
                                    </div>

                                </div>

                                <button class="btn-form-parcela">Guadar cambios</button>

                            </form>
                        </div>
                    </div>
                    

                </div>

                <div class="container-parcela-cuenta">

                    <div class="close-sesion">
                        <a href="#">Cerrar sesión</a>
                    </div>

                    <form class="parcelas-register" action="">

                        <h1>Registro parcelas</h1>

                        <div class="campos-registro">

                            <div class="container-campo">
                                <input type="text" placeholder="Nombre parcela" name="nombreparcelareg" required>
                                <input type="text" placeholder="Hectareas" name="hectareasreg" required>
                            </div>

                            <div  class="container-campo">
                                <input type="text" placeholder="Maquinaria" name="maquinaria-reg" required>
                                <input type="text" placeholder="Costo parcela" name="costparcela-reg" required>
                            </div>

                            <div class="container-campo">
                                <select name="venta_alquiler" required>
                                    <option disabled selected>¿Va a vender o alquilar la parcela?</option>
                                    <option value="venta">Vender</option>
                                    <option value="alquiler">Alquilar</option>
                                </select>
                                <input type="text" placeholder="Ubicacion" name="ubicacion-reg" required>
                            </div>

                            <div id="cultivos">

                                <div class="cultivo-ed">
                                    <div class="campo-cultivo">
                                        <label for="cultivo[]">Cultivo:</label>
                                        <input id="cultivo[]" type="text" name="cultivo[]" required>
                                    </div>

                                    <div class="campo-cultivo">
                                        <label for="siembra[]">Fecha de Siembra:</label>
                                        <input id="siembra[]" type="date" name="siembra[]" required>
                                    </div>

                                    <div class="campo-cultivo">
                                        <label for="cosecha[]">Fecha de Cosecha:</label>
                                        <input id="cosecha[]" type="date" name="cosecha[]" required>
                                    </div>

                                </div>

                            </div>

                            <button id="agregar_cultivo" class="btn-form-parcela">Agregar Cultivo <img src="img/agregar.svg" alt=""></button>

                            <div class="foto-parcela">
                                <label for="fotos">Fotos de la parcela (mínimo 1, máximo 5):</label>
                                <input id="fotos" type="file" name="fotos[]" accept="image/*" multiple required>
                            </div>

                        </div>

                        <Button class="btn-parcela">Publicar parcela</Button>


                    </form>

                </div>
    
            </div>

    
            <div class="ver-parcela">

                <h1>Parcelas publicadas</h1>

                <section class="parcela-publicada">                
    
                    <article class="parcela">
        
                        <div class="slider-container">
                            <div class="slider">
                                <img class="slider-image" src="./img/parcela1.png" alt="Imagen 1">
                                <img class="slider-image" src="img/parcela2.jpg" alt="Imagen 2">
                                <img class="slider-image" src="img/parcela3.jpg" alt="Imagen 3">
                                <!-- Agrega más imágenes según sea necesario -->
                            </div>
                            <button class="prev-button"><img src="./img/izquierda.svg" alt=""></button>
                            <button class="next-button"><img src="./img/derecha.svg" alt=""></button>
                        </div>
        
                        <div class="slider-popup" id="slider-popup">
                            <div class="c-slider">
                                <div class="slider">
                                    <img class="slider-image" src="./img/parcela1.png" alt="Imagen 1">
                                    <img class="slider-image" src="img/parcela2.jpg" alt="Imagen 2">
                                    <img class="slider-image" src="img/parcela3.jpg" alt="Imagen 3">
                                    <!-- Agrega más imágenes según sea necesario -->
                                  </div>
                                  <button class="close-button" id="close-button"><img src="./img/x.svg" alt=""></button>
                                  <button class="prev-button-popup" id="prev-button-popup"><img src="./img/izquierda.svg" alt=""></button>
                                  <button class="next-button-popup" id="next-button-popup"><img src="./img/derecha.svg" alt=""></button>
                            </div>
                        </div>
        
                        <h5>Nombre</h5>
                        <p>Hectareas:</p>
                        <p>Cultivos:</p>
                        <p>Fecha de siembra:</p>
                        <div class="cultivo">
        
                            <div class="cultivo-one">
        
                                <p>cultivo 1</p>
                                <p>fecha cultivo 1</p>
        
                            </div>
        
                            <div class="cultivo-one">
        
                                <p>cultivo 2</p>
                                <p>fecha cultivo 2</p>
        
                            </div>
        
                            <div class="cultivo-one">
        
                                <p>cultivo 2</p>
                                <p>fecha cultivo 2</p>
        
                            </div>
        
                            <div class="cultivo-one">
        
                                <p>cultivo 2</p>
                                <p>fecha cultivo 2</p>
        
                            </div>
        
                        </div>
        
                        <p>Fecha de la cosecha:</p>
                        <div class="cultivo">
        
                            <div class="cultivo-one">
        
                                <p>cultivo 1</p>
                                <p>fecha cultivo 1</p>
        
                            </div>
        
                            <div class="cultivo-one">
        
                                <p>cultivo 1</p>
                                <p>fecha cultivo 1</p>
        
                            </div>
        
                        </div>
        
                        <p>Maquinaria:</p>
                        <p>La parcela para: vende </p>
                        <p>Ubicacion parcela:</p>
        
                        <button class="open-modal-button" onclick="openModal()">Editar Parcela <img src="img/editar.svg" alt="editar"></button>
        
        
                    </article>
        
                    <article class="parcela">
        
                        <div class="slider-container">
                            <div class="slider">
                                <img class="slider-image" src="./img/parcela1.png" alt="Imagen 1">
                                <img class="slider-image" src="img/parcela2.jpg" alt="Imagen 2">
                                <img class="slider-image" src="img/parcela3.jpg" alt="Imagen 3">
                                <!-- Agrega más imágenes según sea necesario -->
                            </div>
                            <button class="prev-button"><img src="./img/izquierda.svg" alt=""></button>
                            <button class="next-button"><img src="./img/derecha.svg" alt=""></button>
                        </div>
        
                        <div class="slider-popup" id="slider-popup">
                            <div class="slider">
                                <img class="slider-image" src="./img/parcela1.png" alt="Imagen 1">
                                <img class="slider-image" src="img/parcela2.jpg" alt="Imagen 2">
                                <img class="slider-image" src="img/parcela3.jpg" alt="Imagen 3">
                                <!-- Agrega más imágenes según sea necesario -->
                            </div>
                            <button class="close-button" id="close-button"><img src="./img/x.svg" alt=""></button>
                            <button class="prev-button-popup" id="prev-button-popup"><img src="./img/izquierda.svg" alt=""></button>
                            <button class="next-button-popup" id="next-button-popup"><img src="./img/derecha.svg" alt=""></button>
                        </div>
        
                        <h5>Nombre</h5>
                        <p><b>Hectareas:</b></p>
                        <p><b>Cultivos:</b></p>
                        <p>Fecha de siembra:</p>
                        <div class="cultivo">
        
                            <div class="cultivo-one">
        
                                <p>cultivo 1</p>
                                <p>fecha cultivo 1</p>
        
                            </div>
        
                            <div class="cultivo-two">
        
                                <p>cultivo 1</p>
                                <p>fecha cultivo 1</p>
        
                            </div>
        
                        </div>
        
                        <p>Fecha de la cosecha:</p>
                        <div class="cultivo">
        
                            <div class="cultivo-one">
        
                                <p>cultivo 1</p>
                                <p>fecha cultivo 1</p>
        
                            </div>
        
                            <div class="cultivo-two">
        
                                <p>cultivo 1</p>
                                <p>fecha cultivo 1</p>
        
                            </div>
        
                        </div>
        
                        <p>Maquinaria</p>
                        <p>La parcela para: vende </p>
                        <p>Ubicacion parcela</p>
        
                        <button class="open-modal-button" onclick="openModal()">Editar Parcela <img src="img/editar.svg" alt="editar"></button>
        
        
                    </article>
        
    
                    <!-- Ventana modal para editar las parcelas -->
                    <div id="modal" class="modal">
                        <div class="modal-content">
                            <span class="close-modal" onclick="closeModal()">&times;</span>
                            <form class="parcelas-register" action="edit.php" method="POST">

                                <!-- campos del formulario... -->

                                <h1>Editar Parcela</h1>
                            
                                <!-- Campo oculto para el ID de la parcela a editar -->
                                <input type="hidden" name="parcela_id" value="ID_DE_LA_PARCELA_A_EDITAR">
                            
                                <div class="campos-registro">

                                    <div class="container-campo">
                                        <input type="text" value="Nombre" name="nombrep-edit">
                                        <input type="text" value="hectareas" name="hectareas-edit">
                                    </div>
        
                                    <div  class="container-campo">
                                        <input type="text" value="maquinaria" name="maquinaria-edit">
                                        <input type="text" value="costo parcela" name="costop-edit">
                                    </div>
        
                                    <div class="container-campo">
                                        <select name="venta_alquiler">
                                            <option disabled selected>¿Va a vender o alquilar la parcela?</option>
                                            <option value="venta">Vender</option>
                                            <option value="alquiler">Alquilar</option>
                                        </select>
                                        <input type="text" value="ubicacion" name="ubicacion-edit">
                                    </div>
        
                                    <div id="contenedor-cultivos">
        
                                        <div id="cultivos-contenedor" class="cultivo-ed">
                                            <div class="campo-cultivo">
                                                <label for="cultivo-edit[]">Cultivo:</label>
                                                <input id="cultivo-edit[]" type="text" name="cultivo-edit[]" required>
                                            </div>
        
                                            <div class="campo-cultivo">
                                                <label for="siembra-edit[]">Fecha de Siembra:</label>
                                                <input id="siembra-edit[]" type="date" name="siembra-edit[]" required>
                                            </div>
        
                                            <div class="campo-cultivo">
                                                <label for="cosecha-edit[]">Fecha de Cosecha:</label>
                                                <input id="cosecha-edit[]" type="date" name="cosecha-edit[]" required>
                                            </div>
        
                                        </div>
        
                                    </div>
        
                                    <button id="agregar-edit" class="btn-form-parcela">Agregar Cultivo <img src="img/agregar.svg" alt="agregar"></button>
        
                                    <div class="foto-parcela">
                                        <label for="fotos">Fotos de la parcela (mínimo 1, máximo 5):</label>
                                        <input type="file" name="fotos-edit[]" accept="image/*" multiple required>
                                    </div>
        
                                </div>

                                <Button class="btn-parcela">Guardar cambios</Button>
    
                            </form>
                        </div>
                    </div>
        
                </section>

            </div>


        </div>


    </div>

    <!-- escript de navegacion de pestañas -->
    <script src="./js/NavegacionParcelas.js"></script>

    <!-- escript del slider manual de cada parcela -->
    <script src="./js/slider.js"></script>

    <!-- escript de el login -->
    <script src="js/login.js"></script>

    <!-- escript para agregar los nuevos campos para un cultivo -->
    <script src="js/CamposCultivos.js"></script>

    <!-- escript para mostrar el fomrulario de editar parcelas -->
    <script src="js/Editar_parcela.js"></script>
    
    <!-- escript modal de cambiar datos pesonales -->
    <script src="js/ModalEditarDatos.js"></script>

    <!-- escript modal de cambiar datos pesonales -->
    <script src="js/RedirigirMiCuenta.js"></script>

</body>
</html>