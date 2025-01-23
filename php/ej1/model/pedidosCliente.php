<?php
include_once "conexion.php";
function getProdCli(){
$conexion = conexion();

if ($_POST) {
    // Recuperamos los datos del formulario
    $id = $_POST["select"];
    
}
// Componemos la sentencia SQL
$ssql = "SELECT Clientes.nombre as cn, Pedidos.nombre as pn, Pedidos.precio as pp, Compras.cantidad as cc FROM Clientes inner JOIN Compras ON Clientes.idCliente = Compras.id_cliente inner JOIN Pedidos ON Compras.id_pedido = Pedidos.idPed WHERE Pedidos.idPed =" . $id;
// Ejecutamos la sentencia SQL
$result = $conexion->query($ssql);




$tablaCliProd = "";
$tablaCliProd .= "<table>";  
$tablaCliProd .= "<tr><th>Nombre del cliente</th><th>Nombre del pedido</th><th>Precio</th><th>Cantidad</th></tr>";
//Mostramos los registros
while ($row = $result->fetch_array()) {
$tablaCliProd .= '<tr>';
$tablaCliProd .= '<td>' . $row["cn"] . '</td>';
$tablaCliProd .=  '<td>' . $row["pn"] . '</td>';
$tablaCliProd .=  '<td>' . $row["pp"] . '</td>';
$tablaCliProd .=  '<td>' . $row["cc"] . '</td>';
$tablaCliProd .=  '</tr>';
}

$tablaCliProd .= '</table>';
return $tablaCliProd;

$result->free_result();
$conexion->close();
}
?>