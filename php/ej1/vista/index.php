
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
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

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
            // Foreach para recorrer el array y mostrar los datos en la tabla
            foreach($listaProductos as $producto){
                echo "<tr>";
                echo "<td>" . $producto['idPed'] . "</td>";
                echo "<td>" . $producto['nombre'] . "</td>";
                echo "<td>" . $producto['descripcion'] . "</td>";
                echo "<td>" . $producto['precio'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <div>
        <h1>Selecciona un producto</h1>
        <form method="POST" action="../control/includesProd.php">
            <label for="select">Selecciona un objeto:</label>
            <select id="select" name="select">
                <?php
                 foreach($listaProductos as $producto){
               
                    echo '<option value="' . $producto["idPed"] . '">' . $producto["nombre"] . '</option>';
                }
                ?>
            </select>

            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php
    if($tabla == ""){
        echo "<p>No hay productos disponibles</p>";
    }else{
    echo $tabla;
    }
    ?>
</body>

</html>
