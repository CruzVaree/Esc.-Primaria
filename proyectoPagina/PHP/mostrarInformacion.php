<?php
session_start();

// Validar que exista la sesión antes de conectar
if (!isset($_SESSION['matricula'])) {
    header("Location: login.php");
    exit();
}

$conexion = mysqli_connect("localhost", "root", "", "primaria");

if (!$conexion) {
    die("Error al conectar");
}

$matricula = $_SESSION['matricula'];

$sql = "
SELECT 
a.matricula,
a.nombre,
ag.grado,
dc.codigo_materia,
m.materia,
dc.primer_trimestre,
dc.segundo_trimestre,
dc.tercer_trimestre,
ROUND(
(IFNULL(dc.primer_trimestre,0)+
IFNULL(dc.segundo_trimestre,0)+
IFNULL(dc.tercer_trimestre,0))/3,2
) AS promedio_materia
FROM alumnos a
INNER JOIN alumno_grado ag ON a.matricula=ag.matricula
LEFT JOIN Calificaciones c ON ag.id_esta=c.id_esta
LEFT JOIN Detalle_Calificaciones dc ON c.id_calificacion=dc.id_calificacion
LEFT JOIN Materias m ON dc.codigo_materia=m.codigo_materia
WHERE a.matricula='$matricula'
ORDER BY ag.grado,dc.codigo_materia
";

$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {
    die(mysqli_error($conexion));
}

$alumno = mysqli_fetch_assoc($resultado);

if (!$alumno) {
    die("Alumno no encontrado");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de Calificaciones</title>
    <link rel="stylesheet" href="../CSS/mostrarInfoAlumno1.css">
    <link rel="icon" href="../Imagenes/pavicon.png" type="image/png">
</head>

<body>

    <main class="contenedor-boleta">
        <div class="perfil-resumen">
            <h2>Bienvenido, <?php echo htmlspecialchars($alumno['nombre']); ?></h2>
            <div class="datos-escolares">
                <p><strong>Matrícula:</strong> <span><?php echo htmlspecialchars($alumno['matricula']); ?></span></p>
                <p><strong>Grado Escolar:</strong> <span><?php echo htmlspecialchars($alumno['grado']); ?>° Año</span></p>
            </div>
        </div>

        <div class="boleta-tarjeta">
            <h3>Boleta de Calificaciones</h3>

            <?php if ($alumno['materia'] != null): ?>
                <div class="tabla-responsiva">
                    <table>
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Materia</th>
                                <th>1° Trimestre</th>
                                <th>2° Trimestre</th>
                                <th>3° Trimestre</th>
                                <th>Promedio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Imprimir la primera fila recuperada
                            echo "<tr>
                                    <td>" . htmlspecialchars($alumno['codigo_materia']) . "</td>
                                    <td class='nombre-materia'>" . htmlspecialchars($alumno['materia']) . "</td>
                                    <td>" . htmlspecialchars($alumno['primer_trimestre']) . "</td>
                                    <td>" . htmlspecialchars($alumno['segundo_trimestre']) . "</td>
                                    <td>" . htmlspecialchars($alumno['tercer_trimestre']) . "</td>
                                    <td class='promedio-celda'>" . htmlspecialchars($alumno['promedio_materia']) . "</td>
                                  </tr>";

                            // Bucle para el resto de las materias asociadas
                            while ($fila = mysqli_fetch_assoc($resultado)) {
                                echo "<tr>
                                        <td>" . htmlspecialchars($fila['codigo_materia']) . "</td>
                                        <td class='nombre-materia'>" . htmlspecialchars($fila['materia']) . "</td>
                                        <td>" . htmlspecialchars($fila['primer_trimestre']) . "</td>
                                        <td>" . htmlspecialchars($fila['segundo_trimestre']) . "</td>
                                        <td>" . htmlspecialchars($fila['tercer_trimestre']) . "</td>
                                        <td class='promedio-celda'>" . htmlspecialchars($fila['promedio_materia']) . "</td>
                                      </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="sin-datos">
                    <p>⚠️ Este alumno todavía no tiene materias o calificaciones asignadas en el ciclo actual.</p>
                </div>
            <?php endif; ?>
        </div>
    </main>

</body>

</html>