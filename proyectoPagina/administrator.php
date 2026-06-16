<?php

session_start();

// Verifica que el formulario fue enviado y meidante el metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Guarda los datos que se escribieron en el htmls
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];


    // Abre el archivo JSON y lo convierte en arreglo para que se recorraa con el for each
    $archivo = file_get_contents("JSON/validacionAdmin.json");
    $administradores = json_decode($archivo, true);


    // bandera que sirve para ver si encontró al usuario
    $encontrado = false;


    // Recorre todos  los usuarios del JSON ("validacionAdmin.json")
    foreach ($administradores as $admin) {

        // Compara si es lo mismo del JSon para entrar al panel
        if ($admin["usuario"] == $usuario && $admin["password"] == $password) {

            $encontrado = true;

            // Guarda la sesión del administrador para que se maneje en otras partes
            $_SESSION["admin"] = true;

            // Manda al index . html
            header("Location:/proyectoPagina/administrador/index.html");
            exit;
        }
    }


    // Si no encontro o el usuario y contraaseña es incorrecto manda ese msj
    if ($encontrado == false) {
        echo "<script type='text/javascript' src='../proyectoPagina/javascript/alertaValidacion.js.'></script>";
    }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../proyectoPagina/CSS/administrador.css">
    <link rel="icon" href="../proyectoPagina/Imagenes/pavicon.png" type="image/png">
    <title>Admin</title>
</head>
<body>
        <div>
            <form method="POST">
            <label for="usuario">Usuario: </label>
            <input type="text" name="usuario" placeholder="Usuario">

            <br><br>
            <label for="password">Contraseña: </label>
            <input type="password" name="password" placeholder="Contraseña">

            <br><br>

            <button type="submit">Entrar</button>
            </form>
        </div>
</body>
</html>
