<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/formulario1.css">
    <title>Registro - Primaria José Ma. Morelos y Pavón</title>
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
        <div id="contenedor" class="registro-ancho">
            <h1>Formulario de Registro</h1>
            <p class="subtitulo">Crea tu cuenta completando los siguientes datos académicos</p>
            
            <form method="POST" action="../PHP/registroDeUsuario.php" id="formulario">
                
                <div class="grupo-input">
                    <label for="nombre">Nombre completo:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre completo" required>
                </div>

                <div class="grupo-input">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" name="correo" id="correo" placeholder="ejemplo@correo.com" required>
                </div>

                <div class="grupo-input">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" name="telefono" id="telefono" pattern="[0-9]{10}" placeholder="10 dígitos numéricos" maxlength="10" required>
                </div>

                <div class="grupo-input">
                    <label for="fecha">Fecha de nacimiento:</label>
                    <input type="date" name="fecha" id="fecha" required>
                </div>

                <div class="grupo-input">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" placeholder="Crea una contraseña segura" required>
                </div>

                <div class="grupo-input">
                    <label for="confirmar_password">Confirmar contraseña:</label>
                    <input type="password" name="confirmar_password" placeholder="Repite tu contraseña" required>
                </div>
                
                <div class="grupo-genero">
                    <label class="titulo-genero">Género:</label>
                    <div class="opciones-genero">
                        <label class="radio-label">
                            <input type="radio" name="genero" value="hombre" checked> Hombre
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="genero" value="mujer"> Mujer
                        </label>
                    </div>
                </div>

                <div class="grupo-checkbox">
                    <input type="checkbox" id="terminos" name="terminos" required>
                    <label for="terminos">Acepto los términos y políticas de privacidad</label>
                </div>

                <div class="botones-formulario">
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Borrar formulario" class="btn-borrar">
                </div>
            </form>
        </div>
    </div>
</body>

</html>