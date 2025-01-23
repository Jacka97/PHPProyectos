<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserción de datos</title>

    <style>
        table,
        th,
        td {
            border-collapse: collapse;
            border: 1px solid black;
        }
    </style>
</head>

<?php
include_once "conexion.php";

$conexion = conexion();
$ssql1 = "SELECT * FROM Pedidos";
// Ejecutamos la sentencia SQL
$result1 = $conexion->query($ssql1);
?>


<body>
    <h1>Listado de productos</h1>
    <table>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
        </tr>
        <?php
        //Mostramos los registros
        while ($row = $result1->fetch_array()) {
            echo '<tr>';
            echo '<td>' . $row["idPed"] . '</td>';
            echo '<td>' . $row["nombre"] . '</td>';
            echo '<td>' . $row["descripcion"] . '</td>';
            echo '<td>' . $row["precio"] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <?php
    $result1->free_result();
    ?>
    <div>
        <h1>Selecciona un producto</h1>
        <form method="POST" action="ej1.php">
            <label for="select">Selecciona un objeto:</label>
            <select id="select" name="select">
                <?php
                $ssql2 = "SELECT * FROM Pedidos";
                $result2 = $conexion->query($ssql2);
                while ($row = $result2->fetch_array()) {
                    echo '<option value="' . $row["idPed"] . '">' . $row["nombre"] . '</option>';
                }
                ?>
            </select>

            <input type="submit" value="Enviar">
        </form>
    </div>
    <div>
        <?php
        session_start();
        $tabla = $_SESSION['tabla'];
        echo $tabla;
        ?>
    </div>

</body>

</html>