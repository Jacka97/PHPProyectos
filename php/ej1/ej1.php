<?php
include_once "conexion.php";

$conexion = conexion();
session_start();

if ($_POST) {
    // Recuperamos los datos del formulario
    $id = $_POST["select"];
    
}
// Componemos la sentencia SQL
$ssql = "SELECT Clientes.nombre as cn, Pedidos.nombre as pn, Pedidos.precio as pp, Compras.cantidad as cc FROM Clientes inner JOIN Compras ON Clientes.idCliente = Compras.id_cliente inner JOIN Pedidos ON Compras.id_pedido = Pedidos.idPed WHERE Pedidos.idPed =" . $id;
// Ejecutamos la sentencia SQL
$result = $conexion->query($ssql);




$tabla = "";
$tabla .= "<table>";  
$tabla .= "<tr><th>Nombre del cliente</th><th>Nombre del pedido</th><th>Precio</th><th>Cantidad</th></tr>";
//Mostramos los registros
while ($row = $result->fetch_array()) {
$tabla .= '<tr>';
$tabla .= '<td>' . $row["cn"] . '</td>';
$tabla .=  '<td>' . $row["pn"] . '</td>';
$tabla .=  '<td>' . $row["pp"] . '</td>';
$tabla .=  '<td>' . $row["cc"] . '</td>';
$tabla .=  '</tr>';
}

$tabla .= '</table>';

$_SESSION["tabla"] = $tabla;
header("location: listado.php")
?>

<?php
$result->free_result();
$conexion->close();
?>