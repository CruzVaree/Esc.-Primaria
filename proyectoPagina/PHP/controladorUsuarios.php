<?php

session_start();

include("conexion_dbUsuarios.php");

$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE correo='$correo'";

$resultado = mysqli_query($conexion, $sql);


//en este if se verifica si encontro el usuario y devuelve la fila (si existe el correo devolvera 1)
if(mysqli_num_rows($resultado) == 1){

//transforma esas filas a tipo arregos
    $usuario = mysqli_fetch_assoc($resultado);


    if(password_verify($password, $usuario['password'])){


    //GUARDA INFORMACION DEL INICIO DE SESION ESTA PARTE
        $_SESSION['id_usuario'] = $usuario['id_usuario']; //recuerda que usuario es  
        $_SESSION['nombre'] = $usuario['nombre'];   //recuerda su nombre del usuario en la DB :)

        header("Location: ../index.html");
        exit();

    }else{
        echo "Contraseña incorrecta";
    }

}else{
    echo "Correo no encontrado";
}

?>