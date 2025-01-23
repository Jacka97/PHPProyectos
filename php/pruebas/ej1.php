<?php
include_once "conexion.php";

$conexion = conexion();

if ($_POST) {
    // Recuperamos los datos del formulario
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    // Componemos la sentencia SQL
    $ssql = "INSERT INTO Clientes (nombre, telefono) VALUES ('$nombre', '$telefono')";
    // Ejecutamos la sentencia y comprobamos si ha ido bien
    if ($conexion->query($ssql)) {
    echo "<p>Registro insertado con éxito</p>";
    } else {
    echo "<p>Hubo un error al ejecutar la sentencia de inserción: {$conexion->error}</p>";
    }
    }

// Componemos la sentencia SQL
$ssql = "SELECT * FROM Clientes";
// Ejecutamos la sentencia SQL
$result = $conexion->query($ssql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultados Consulta</title>
</head>
<body>
<h1>Resultados de una consulta a una BD</h1>
<table>
<tr>
<th>id</th>
<th>Nombre</th>
<th>Teléfono</th>
</tr>
<?php
//Mostramos los registros
while ($row = $result->fetch_array()) {
echo '<tr>';
echo '<td>' . $row["idCliente"] . '</td>';
echo '<td>' . $row["nombre"] . '</td>';
echo '<td>' . $row["telefono"] . '</td>';
echo '</tr>';
}
?>
</table>
</body>
</html>
<?php
$result->free_result();
$conexion->close();
?>