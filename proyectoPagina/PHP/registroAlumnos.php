<?php

session_start();
$conexion = mysqli_connect("localhost", "root", "", "escuela");

$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$promedio = $_POST['promedio'];

$sql = "INSERT INTO alumnos 
            (matricula, nombre, telefono, promedio)
            VALUES
            ('$matricula','$nombre','$telefono','$promedio')";

 


if (mysqli_query($conexion, $sql)) {
    echo "
        <script>
        alert('Usuario registrado correctamente!');
        window.location='../HTML/index.html';
        </script>";
} else {
     echo "
        <script>
        alert('Error al registrar el usuario!');
        window.location='../HTML/index.html';
        </script>";
}
?>
