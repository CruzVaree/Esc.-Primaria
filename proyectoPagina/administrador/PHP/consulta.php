<?php

$conexion=new mysqli("localhost","root","","primaria");

if($conexion->connect_error){
    die("Error al conectar");
}

$alumno=null;

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $matricula=trim($_POST['matricula']);

    $consulta="
    SELECT * FROM alumnos 
    WHERE matricula='$matricula'";

    $resultado=mysqli_query($conexion,$consulta);

    if(mysqli_num_rows($resultado)>0){
        $alumno=mysqli_fetch_assoc($resultado);
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Buscar Alumno</title>
<link rel="icon" href="../imagenes/pavicon.png" type="image/png">
<link rel="stylesheet" href="../CSS/consulta.css">

</head>

<body>

<div class="contenedor">

<h1>Consulta Alumno</h1>

<?php

if($alumno){

echo "

<div class='tarjeta'>

<h2>Alumno</h2>

<p><b>Matrícula:</b> {$alumno['matricula']}</p>

<p><b>Nombre:</b> {$alumno['nombre']}</p>

<p><b>Teléfono:</b> {$alumno['telefono']}</p>

</div>";

}else if($_SERVER["REQUEST_METHOD"]=="POST"){

echo "<p class='error'>Alumno no encontrado</p>";

}

?>

</div>

</body>
</html>