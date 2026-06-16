<?php
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<link rel="stylesheet" type="text/css" href="../CSS/formulario.css">';
echo '<title>Primaria Jose Ma. Morelos y Pavón</title>';
echo '<link rel="icon" href="../Imagenes/pavicon.png" type="image/png">';



$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$fecha = $_POST["fecha"];
$genero = $_POST["genero"];
$telefono = $_POST["telefono"];
$terminos = isset($_POST["terminos"]);

echo "<h1><strong>USUARIO GENERADO CON EXITO</strong></h1>";
echo "<h2>Bienvenido: $nombre</h2>";
echo "<header><h2>Registro de informacion</h2></header>";
echo "<main>Nombre del usuario es: " . $nombre . "<br><br>";
echo "Correo del usuario es: " . $correo . "<br><br>";
echo "Numero de telefono: " . $telefono . "<br><br>";
echo "Fecha de nacimiento: " . $fecha . "<br><br>";
echo "Genero del usuario es: " . $genero . "<br><br>";
echo "Acepta los terminos: " . ($terminos ? 'SI' : 'NO') . "</main><br><br>";

if ($_POST["genero"] == "mujer") {
    echo "<body style='background:#FFDBF8'>";
} else {
    echo "<body style='background:#CCEFFF'>";
}
?>