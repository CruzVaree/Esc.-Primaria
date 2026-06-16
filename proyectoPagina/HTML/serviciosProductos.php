<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Catálogo Escolar</title>
    <link rel="stylesheet" href="../CSS/servicioProducto.css">
    <script type="text/javascript" src="../javascript/scriptProdcutos.js"></script>
    <link rel="icon" href="../Imagenes/pavicon.png" type="image/png">
</head>

<body>

    <noscript>
        <p><strong>Necesitas JavaScript para esta web, activalo desde tu navegador</strong></p>
    </noscript>

    <header>
        <h1>Catálogo Escolar</h1>
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
    <form method="POST" action="../PHP/ticket.php">
        <section class="catalogo">

            <div class="producto">
                <img src="../Imagenes/playeraESCOLAR.jpg" alt="Playera escolar">
                <h2>Playera Escolar</h2>
                <p>Playera oficial color blanco con logo institucional.</p>
                <span class="precio">$150 MXN</span>
                <input type="number" name="playeraBlanca">
            </div>

            <div class="producto">
                <img src="../Imagenes/pantalonEscolar.jpg" alt="Pantalón escolar">
                <h2>Pantalón Escolar</h2>
                <p>Pantalón formal color verde oscuro, cómodo y resistente.</p>
                <span class="precio">$250 MXN</span>
                <input type="number" name="pantalonVerde">
            </div>

            <div class="producto">
                <img src="../Imagenes/fisicaUniforme.jpg" alt="Uniforme educación física">
                <h2>Uniforme Educación Física </h2>
                <p>Conjunto deportivo (playera y short) para actividades físicas.</p>
                <span class="precio">$300 MXN</span>
                <input type="number" name="conjuntoDeportivo">
            </div>

            <div class="producto">
                <img src="../Imagenes/chaleco escolar.jpg" alt="Chaleco escolar">
                <h2>Chaleco Escolar</h2>
                <p>Chaleco tejido color verde institucional para temporada fría.</p>
                <span class="precio">$220 MXN</span>
                <input type="number" name="chalecoVerde">
            </div>

            <div class="producto">
                <img src="../Imagenes/tenis.jpg" alt="Chaleco escolar">
                <h2>Tenis de educación Física escolar</h2>
                <p>Ligero y cómodo, ideal para actividades físicas. Tela transpirable y ajuste práctico para mayor
                    libertad de movimiento.</p>
                <span class="precio">$220 MXN</span>
                <input type="number" name="tenisDeportivos">
            </div>

            <div class="producto">
                <img src="../Imagenes/zapatos.WEBP">
                <h2>Zapatos Escolares</h2>
                <p>Zapatos escolares de buena calidad, color negro y comodos.</p>
                <span class="precio">$320 MXN</span>
                <input type="number" name="zapatosEscolares">
            </div>

            <div class="producto">
                <img src="../Imagenes/credenciales.WEBP">
                <h2>Reposicion de credenciales</h2>
                <p>Reposicion de crendencial en caso de extravío</p>
                <span class="precio">$50 MXN</span>
                <input type="number" name="reposicionCrendencial">
            </div>

            <div class="producto">
                <img src="../Imagenes/chamarra.WEBP">
                <h2>Chamarra Escolar</h2>
                <p>Chamarra color negro comoda y con buena calidad de tela.</p>
                <span class="precio">$180 MXN</span>
                <input type="number" name="chamarraEscolar">
            </div>

            <div class="producto">
                <img src="../Imagenes/cuadernos.WEBP">
                <h2>Docena de cuadernos</h2>
                <p>Cuadernos a menor precio por docena.</p>
                <span class="precio">$100 MXN</span>
                <input type="number" name="cuadernos">
            </div>

            <div class="producto">
                <img src="../Imagenes/utiles.WEBP">
                <h2>Utiles escolares</h2>
                <p>Utiles escolares a menor precio y de buena calidad.</p>
                <span class="precio">$60 MXN</span>
                <input type="number" name="utiles">
            </div>
        </section>
        <div class="botones">
                <input type="submit" value="Comprar">
                <input type="reset" value="Borrar">
            </div>
    </form>

    <footer>
        <p>© 2026 Escuela Primaria - Catálogo de Productos</p>
    </footer>

</body>

</html>