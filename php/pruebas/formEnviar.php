<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserción de datos</title>
</head>

<?php
include_once "conexion.php";

$conexion = conexion();
$ssql1 = "SELECT * FROM Clientes";
// Ejecutamos la sentencia SQL
$result1 = $conexion->query($ssql1);
?>
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
while ($row = $result1->fetch_array()) {
echo '<tr>';
echo '<td>' . $row["idCliente"] . '</td>';
echo '<td>' . $row["nombre"] . '</td>';
echo '<td>' . $row["telefono"] . '</td>';
echo '</tr>';
}
?>
</table>
<?php
$result1->free_result();
$conexion->close();
?>
    <div>
        <h1>Insertar un registro</h1>
        <form method="POST" action="ej1.php">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"><br>
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono"><br>
            <input type="submit" value="Insertar">
        </form>
    </div>
    <div>
        <h2>Editar campo</h2>
        <form method="POST" action="ej1.php">
            <label for="id">ID</label>
            <input type="text" name="id"><br>
            <input type="submit" value="Insertar">
        </form></div>
</body>

</html>