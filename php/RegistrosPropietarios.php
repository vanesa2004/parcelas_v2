<?php

    include("conexion_bd.php");

    // Comprobar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
        $sexo = mysqli_real_escape_string($conn, $_POST['sexo']);
        $numTelefono = mysqli_real_escape_string($conn, $_POST['num-tlfono']);
        $descripcionPersonal = mysqli_real_escape_string($conn, $_POST['descripcionpersonal']);
        $fechaNacimiento = mysqli_real_escape_string($conn, $_POST['fecha-nacimiento']);
        $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $rol = 3; // Establecer el rol como Propietario

        // Encriptar la contraseña usando password_hash
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Query para insertar los datos en la base de datos con la contraseña encriptada
        $sql = "INSERT INTO usuarios (nombre, sexo, fecha_nacimiento, telefono, descripcion_personal, correo, contrasena, id_rol) 
                    VALUES ('$nombre', '$sexo', '$fechaNacimiento', '$numTelefono', '$descripcionPersonal', '$usuario', '$hashed_password', '$rol')";

        // Verificar la conexión a la base de datos
        if ($conn) {
            if ($conn->query($sql) === TRUE) {
                echo "Datos guardados correctamente.";
                // Redirigir a otra página si es necesario
                // header('Location: otra_pagina.php');
                // exit();
            } else {
                echo "Error al guardar los datos: " . $conn->error;
            }
        } else {
            echo "Error en la conexión a la base de datos.";
        }
    }
?>