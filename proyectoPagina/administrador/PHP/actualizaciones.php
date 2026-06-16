<?php

$conexion=new mysqli("localhost","root","","primaria");

if($conexion->connect_error){
    die("Error al conectar");
}


$matricula=$_POST['matricula'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];


$consulta="
UPDATE alumnos
SET 
nombre='$nombre',
telefono='$telefono'
WHERE matricula='$matricula'
";


if(mysqli_query($conexion,$consulta)){

echo "
<script>
alert('Alumno actualizado');
window.location='../index.html';
</script>";

}else{

echo mysqli_error($conexion);

}

?>