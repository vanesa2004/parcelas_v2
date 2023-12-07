<?php
session_start();
include("conexion_bd.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $contrasena = mysqli_real_escape_string($conn, $_POST['contrasena']);

    // Consulta para verificar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE correo = '$usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar si la contraseña ingresada coincide con la almacenada en la base de datos
        if (password_verify($contrasena, $row['contrasena'])) {
            // Inicio de sesión exitoso
            $_SESSION['usuario'] = $row['correo'];

            // Establecer el encabezado de respuesta para la pestaña activa
            header('Active-Tab: mi-cuenta', true);

            // Otros pasos después de la verificación exitosa, si es necesario
            // ...

            // Responder con un mensaje de éxito (opcional)
            echo "Inicio de sesión exitoso";
            exit();
        } else {
            // Contraseña incorrecta
            http_response_code(401); // Estado 401 Unauthorized
            echo "La contraseña ingresada es incorrecta.";
            exit();
        }
    } else {
        // El usuario no existe
        http_response_code(404); // Estado 404 Not Found
        echo "El usuario ingresado no existe.";
        exit();
    }
}
?>