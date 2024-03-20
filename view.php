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
    <title>Document</title>
</head>
<body>
 <h1>Reporte de TECNOPARK</h1>
 <?php


// Consulta SQL para obtener los datos de la tabla
$sql = "SELECT * FROM entrada";
$resultado = $conexion->query($sql);

// Verificar si la consulta devuelve resultados
if ($resultado->num_rows > 0) {
    // Imprimir los datos en una tabla HTML
    echo "<table border='1'>
            <tr>
                <th>id_entrada</th>
                <th>docu</th>
                <th>nombre</th>
                <th>telefono</th>
                <th>correo</th>
                <th>fecha_boleta</th>
                <th>id_comida</th>
                <th>id_juego</th>
            </tr>";

    // Iterar sobre los resultados y mostrar cada fila en la tabla
    while ($fila = $resultado->fetch_assoc()) {
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
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión a la base de datos

?>


</body>
</html>