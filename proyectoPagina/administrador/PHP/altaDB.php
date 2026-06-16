<?php

$conexion = new mysqli("localhost","root","","primaria");

if($conexion->connect_error){
    die("ERROR AL CONECTAR LA BASE DE DATOS!");
}

$matricula = trim($_POST['matricula']);
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$grado = (INT)($_POST['grado']);

$verificar = "SELECT matricula FROM alumnos WHERE matricula='$matricula'";

$resultado = mysqli_query($conexion,$verificar);

if(mysqli_num_rows($resultado) > 0){

    echo "
    <script>
    alert('Error: La matrícula ya está registrada');
    window.location='../HTML/altas.html';
    </script>";

    exit();
}


$consulta = "INSERT INTO alumnos 
(matricula,nombre,telefono)
VALUES
('$matricula','$nombre','$telefono')";


$consulta2 = "INSERT INTO alumno_grado
(matricula,grado)
VALUES
('$matricula','$grado')";


$conexion->begin_transaction();


if(mysqli_query($conexion,$consulta)){

    if(mysqli_query($conexion,$consulta2)){

        $conexion->commit();

        echo "
        <script>
        alert('Usuario registrado correctamente');
        window.location='../index.html';
        </script>";


    }else{

        $conexion->rollback();

        echo "
        <script>
        alert('Error al guardar grado');
        window.location='../HTML/altas.html';
        </script>";
    }

}else{

    $conexion->rollback();

    echo "
    <script>
    alert('Error al guardar alumno');
    window.location='../administrador/HTML/altas.html';
    </script>";
}

?>