<?php

//srive para iniciar sesion y usar variables de sesion
session_start();

//conexion a la base de datos escuela 
$conexion = mysqli_connect("localhost","root","","primaria");


//verificar si se hizo bien la conexion a la base de datos
if(!$conexion){
    die("Error de conexion");
}


//isset para que chequemos que el valor de la variable no sea NULL, en caso de que exista algo 
//pasara al siguiente codigo
if(!isset($_POST['matricula'])){
    echo"No se envio la matricula";
    exit();
}

//guarda la matricula que se envio desde el formulario para que la usemos en la consulta SQL
$matricula = $_POST['matricula'];


//la consulta para que seleccionemos la matricula
$sql = "SELECT * FROM alumnos
        WHERE matricula = '$matricula'";


//realizar la peticion de la variable $sql a la DB de la escuela
$resultado = mysqli_query($conexion, $sql);

//en este if se verifica si encontro la matricula y devuelve la fila mientras sea diferente a 0 
//Cuenta cuántas filas regresó la consulta y no devolvio una fila no existe esa matricula
//si devolvio una fila entrara al if
//entrara al if
if(mysqli_num_rows($resultado) > 0){

    //aqui en esta variable $alumno transforma ese fila devuelta a arreglo
    //matricula => "220360517" :)))
    $alumno = mysqli_fetch_assoc($resultado);


    //ya en esta parte de sesion guarda la sesion para poder usar esos datos en 
    //otra parte del codigo 
    $_SESSION['matricula'] =
    $alumno['matricula'];

    $_SESSION['nombre'] =
    $alumno['nombre'];


    //aqui nos manda a un redireccionamiento a un php que nos dara todo la informacion del usuario
    header("Location: mostrarInformacion.php");

}else{

    //  Si NO existe la matrícula, manda a la página de error
    header("Location: ../HTML/matriculaNoEncontrada.html");
    exit();
}
?>