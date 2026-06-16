<?php

$conexion=new mysqli("localhost","root","","primaria");

if($conexion->connect_error){
    die("Error al conectar");
}


$matricula=trim($_POST['matricula']);


//buscar id_esta
$buscar=mysqli_query($conexion,
"SELECT id_esta FROM alumno_grado
WHERE matricula='$matricula'"
);


$dato=mysqli_fetch_assoc($buscar);

$id_esta=$dato['id_esta'];


//buscar id_calificacion
$buscarCal=mysqli_query($conexion,
"SELECT id_calificacion FROM calificaciones
WHERE id_esta='$id_esta'"
);


while($fila=mysqli_fetch_assoc($buscarCal)){

$id_calificacion=$fila['id_calificacion'];


//borrar detalles
mysqli_query($conexion,
"DELETE FROM detalle_calificaciones
WHERE id_calificacion='$id_calificacion'"
);

}


//borrar calificaciones relacionadas
mysqli_query($conexion,
"DELETE FROM calificaciones
WHERE id_esta='$id_esta'"
);


//borrar de la tabla grado
mysqli_query($conexion,
"DELETE FROM alumno_grado
WHERE matricula='$matricula'"
);


//borrar alumno registradoo
mysqli_query($conexion,
"DELETE FROM alumnos
WHERE matricula='$matricula'"
);



echo "
<script>
alert('Alumno eliminado');
window.location='../index.html';
</script>
";


?>