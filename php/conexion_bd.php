<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $namebd = "proyectos";

    $conn = new mysqli($servername, $username, $password, $namebd );

    if($conn->connect_error){
        die("Error de conexion en la base de datos:".$conn->connect_error);
    }else{
        echo"Conexion bd exitosa";
    }

?>