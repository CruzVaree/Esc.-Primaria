<?php
    
    $conexion = new mysqli("localhost", "root", "", "usuarios");

    if(!$conexion){
        die("Error al conectar la base de datos");
    }

?>