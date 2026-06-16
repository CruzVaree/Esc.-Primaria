<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/formulario.css">
    <title>Primaria Jose Ma. Morelos y Pavón</title>
    <link rel="icon" href="../Imagenes/pavicon.png" type="image/png">
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

    <div class="vista-formulario">
        <div id="contenedor">
            <h1>Iniciar Sesión</h1>
            <p class="subtitulo">Ingresa tus credenciales para acceder a la plataforma</p>
            
            <form method="POST" action="../PHP/controladorUsuarios.php" id="formulario">
                <div class="grupo-input">
                    <label for="email">Ingresa tu email:</label>
                    <input type="email" name="correo" required placeholder="ejemplo@correo.com" autocomplete="email">
                </div>
                
                <div class="grupo-input">
                    <label for="password">Ingresa tu contraseña:</label>
                    <input type="password" name="password" required placeholder="••••••••">
                </div>
                
                <input type="submit" name="ingresar" value="Iniciar sesión">
            </form>
        </div>
    </div>
</body>

</html>