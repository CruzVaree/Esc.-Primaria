<?php
    
    include("conexion_dbUsuarios.php");
    
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $password = $_POST['password']; 
    $genero = $_POST['genero'];
    $confirmar_password = $_POST['confirmar_password'];

    if($password != $confirmar_password){
        die("Las contraseñas no coinciden :(");
    }

    $consulta = mysqli_query(
    $conexion,
    "SELECT * FROM usuarios WHERE correo='$correo'"
    );

    if(mysqli_num_rows($consulta) > 0){
     echo "
        <script>
        alert('correo ya registrado!');
        window.location='../HTML/formulario.php';
        </script>";
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios 
            (nombre, correo, telefono, fecha_nacimiento, genero, password)
            VALUES
            ('$nombre','$correo','$telefono','$fecha','$genero','$passwordHash')";

            if(mysqli_query($conexion, $sql)){
                 echo "
                <script>
                alert('Usuario registrado correctamente!');
                window.location='../index.html';
                </script>";
            } else {
                 echo "
                <script>
                alert('Error al registrar el usuario!');
                window.location='../HTML/formulario.php';
                </script>";
            }
?>