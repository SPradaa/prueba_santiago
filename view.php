<?php
require_once("db/conexion.php");
$db = new Database();
$con = $db->conectar();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de TECNOPARK</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1 class="text-center mt-5">Reporte de TECNOPARK</h1>
<?php
$sql = "SELECT * FROM entrada ORDER BY fecha_boleta DESC";
$resultado = $con->query($sql);
if ($resultado->rowCount() > 0) {
    echo "<table class='table table-bordered mt-5'>
            <thead class='thead-dark'>
                <tr>
                    <th>id_entrada</th>
                    <th>docu</th>
                    <th>nombre</th>
                    <th>telefono</th>
                    <th>correo</th>
                    <th>fecha_boleta</th>
                    <th>id_comida</th>
                    <th>id_juego</th>
                </tr>
            </thead>
            <tbody>";
    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $fila['id_entrada'] . "</td>";
        echo "<td>" . $fila['docu'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['telefono'] . "</td>";
        echo "<td>" . $fila['correo'] . "</td>";
        echo "<td>" . $fila['fecha_boleta'] . "</td>";
        echo "<td>" . $fila['id_comida'] . "</td>";
        echo "<td>" . $fila['id_juego'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p class='text-center mt-5'>No se encontraron resultados.</p>";
}
$con = null;
?>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
