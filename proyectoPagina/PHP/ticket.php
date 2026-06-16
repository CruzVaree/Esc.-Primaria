<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/ticketS.css">
    <link rel="icon" href="../Imagenes/pavicon.png" type="image/png">
    <title>Ticket de compra</title>
</head>

<body>

    <?php

    $playeraBlanca = (int) ($_POST["playeraBlanca"] ?? 0);
    $pantalonVerde = (int) ($_POST["pantalonVerde"] ?? 0);
    $conjuntoDeportivo = (int) ($_POST["conjuntoDeportivo"] ?? 0);
    $chalecoVerde = (int) ($_POST["chalecoVerde"] ?? 0);
    $tenisDeportivos = (int) ($_POST["tenisDeportivos"] ?? 0);
    $zapatosEscolares = (int) ($_POST["zapatosEscolares"] ?? 0);
    $reposicionCrendencial = (int) ($_POST["reposicionCrendencial"] ?? 0);
    $chamarraEscolar = (int) ($_POST["chamarraEscolar"] ?? 0);
    $cuadernos = (int) ($_POST["cuadernos"] ?? 0);
    $utiles = (int) ($_POST["utiles"] ?? 0);

    $playeraB = 150;
    $pantalonV = 250;
    $conjuntoD = 300;
    $chalecoV = 220;
    $tenisD = 220;
    $zapatosE = 320;
    $reposicionC = 50;
    $chamarraE = 180;
    $cuadernosD = 100;
    $utilesE = 60;

    $totalPb = $playeraBlanca * $playeraB;
    $totalPv = $pantalonVerde * $pantalonV;
    $totalCd = $conjuntoDeportivo * $conjuntoD;
    $totalCv = $chalecoVerde * $chalecoV;
    $totalTd = $tenisDeportivos * $tenisD;
    $totalZe = $zapatosEscolares * $zapatosE;
    $totalRc = $reposicionCrendencial * $reposicionC;
    $totalCe = $chamarraEscolar * $chamarraE;
    $totalCu = $cuadernos * $cuadernosD;
    $totalUt = $utiles * $utilesE;

    $compra = 0;

    echo '<div class="ticket">';
    echo '<h2>Ticket de compra</h2>';

    echo '
<table>
    <thead>
        <tr>
            <th>Cantidad</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
';

    if ($playeraBlanca > 0) {
        echo '<tr>';
        echo '<td>' . $playeraBlanca . '</td>';
        echo '<td>Playera oficial color blanco con logo institucional.</td>';
        echo '<td>' . $playeraB . '</td>';
        echo '<td>' . $totalPb . '</td>';
        echo '</tr>';
        $compra += $totalPb;
    }

    if ($pantalonVerde > 0) {
        echo '<tr>';
        echo '<td>' . $pantalonVerde . '</td>';
        echo '<td>Pantalón formal color verde oscuro, cómodo y resistente.</td>';
        echo '<td>' . $pantalonV . '</td>';
        echo '<td>' . $totalPv . '</td>';
        echo '</tr>';
        $compra += $totalPv;
    }

    if ($conjuntoDeportivo > 0) {
        echo '<tr>';
        echo '<td>' . $conjuntoDeportivo . '</td>';
        echo '<td>Conjunto deportivo (playera y short) para actividades físicas.</td>';
        echo '<td>' . $conjuntoD . '</td>';
        echo '<td>' . $totalCd . '</td>';
        echo '</tr>';
        $compra += $totalCd;
    }

    if ($chalecoVerde > 0) {
        echo '<tr>';
        echo '<td>' . $chalecoVerde . '</td>';
        echo '<td>Chaleco tejido color verde institucional para temporada fría.</td>';
        echo '<td>' . $chalecoV . '</td>';
        echo '<td>' . $totalCv . '</td>';
        echo '</tr>';
        $compra += $totalCv;
    }

    if ($tenisDeportivos > 0) {
        echo '<tr>';
        echo '<td>' . $tenisDeportivos . '</td>';
        echo '<td>Ligero y cómodo, ideal para actividades físicas. Tela transpirable y ajuste práctico para mayor libertad de movimiento.</td>';
        echo '<td>' . $tenisD . '</td>';
        echo '<td>' . $totalTd . '</td>';
        echo '</tr>';
        $compra += $totalTd;
    }

    if ($zapatosEscolares > 0) {
        echo '<tr>';
        echo '<td>' . $zapatosEscolares . '</td>';
        echo '<td>Zapatos escolares de buena calidad, color negro y cómodos.</td>';
        echo '<td>' . $zapatosE . '</td>';
        echo '<td>' . $totalZe . '</td>';
        echo '</tr>';
        $compra += $totalZe;
    }

    if ($reposicionCrendencial > 0) {
        echo '<tr>';
        echo '<td>' . $reposicionCrendencial . '</td>';
        echo '<td>Reposición de credencial en caso de extravío.</td>';
        echo '<td>' . $reposicionC . '</td>';
        echo '<td>' . $totalRc . '</td>';
        echo '</tr>';
        $compra += $totalRc;
    }

    if ($chamarraEscolar > 0) {
        echo '<tr>';
        echo '<td>' . $chamarraEscolar . '</td>';
        echo '<td>Chamarra color negro cómoda y con buena calidad de tela.</td>';
        echo '<td>' . $chamarraE . '</td>';
        echo '<td>' . $totalCe . '</td>';
        echo '</tr>';
        $compra += $totalCe;
    }

    if ($cuadernos > 0) {
        echo '<tr>';
        echo '<td>' . $cuadernos . '</td>';
        echo '<td>Docena de cuadernos a menor precio.</td>';
        echo '<td>' . $cuadernosD . '</td>';
        echo '<td>' . $totalCu . '</td>';
        echo '</tr>';
        $compra += $totalCu;
    }

    if ($utiles > 0) {
        echo '<tr>';
        echo '<td>' . $utiles . '</td>';
        echo '<td>Útiles escolares a menor precio y de buena calidad.</td>';
        echo '<td>' . $utilesE . '</td>';
        echo '<td>' . $totalUt . '</td>';
        echo '</tr>';
        $compra += $totalUt;
    }

    echo '
    </tbody>
</table>
';

    echo "<h2>Subtotal: $$compra</h2>";

    if ($compra > 10000) {
        $total = $compra * 0.90;
        echo '<p><strong>Se realizó un descuento del 10%</strong></p>';
        echo "<h2>Total a pagar: $$total</h2>";
    }

    echo '</div>';

    ?>

</body>

</html>