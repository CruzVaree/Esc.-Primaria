<?php
// Entrar a la cuenta y habilitar el uso de $_SESSION
session_start();

// Si no existe la sesión del usuario, redirigir al login inmediatamente
if(!isset($_SESSION['id_usuario'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Imagenes/pavicon.png" type="image/png">
    <title>Mi Cuenta - Escuela José María Morelos y Pavón</title>
    <link rel="stylesheet" href="../CSS/miCuenta.css">
</head>
<body>

    <header>
        <h1 id="tituloP">Esc. José María Morelos y Pavón</h1>
        <nav>
            <ul id="indiceP">
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="../HTML/intermedioproyecto.html">Institución</a></li>
                <li><a href="../HTML/OfertaEducativa.html">Oferta educativa</a></li>
                <li><a href="../HTML/Alumnos.html">Alumnos</a></li>
                <li><a>Buzón</a></li>
                <li><a href="../HTML/formulario.php">Registrate</a></li>
                <li><a href="../HTML/serviciosProductos.php">Servicios y Productos</a></li>
                <li><a href="../HTML/login.php">Login</a></li>
                <li><a href="../HTML/miCuenta.php">Mi Cuenta</a></li>
            </ul>
        </nav>
    </header>

    <div class="vista-cuenta">
        <div class="tarjeta-perfil">
            <div class="avatar-usuario">
                <span>🎓</span>
            </div>
            
            <h1>Mi Cuenta</h1>
            <p class="bienvenida">¡Bienvenido de vuelta, <strong><?php echo htmlspecialchars($_SESSION['nombre']); ?></strong>!</p>
            
            <div class="info-adicional">
                <p>Desde este panel puedes consultar tu estado académico, accesos y gestionar tus servicios escolares.</p>
            </div>

            <form action="../PHP/logout.php" method="POST">
                <button type="submit" class="btn-logout">Cerrar sesión</button>
            </form>
        </div>
    </div>

</body>
</html>