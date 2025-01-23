<?php
include_once "conexion.php";

class Productos
{
    public static function getAllProd()
    {
        // Establecemos la conexión
        $conexion = conexion();

        // Definimos la consulta SQL
        $ssql1 = "SELECT * FROM Pedidos"; 

        // Ejecutamos la sentencia SQL
        $result1 = $conexion->query($ssql1);
       
        // Cerramos la conexión
        $conexion->close();

        return $result1->fetch_all(MYSQLI_ASSOC);
    }
    public static function getProdCli(){
        if ($_POST) {
            // Recuperamos los datos del formulario
            $id = $_POST["select"];
            
        }
        $conexion = conexion();
        
        $ssql = "SELECT Clientes.nombre as cn, Pedidos.nombre as pn, Pedidos.precio as pp, Compras.cantidad as cc FROM Clientes inner JOIN Compras ON Clientes.idCliente = Compras.id_cliente inner JOIN Pedidos ON Compras.id_pedido = Pedidos.idPed WHERE Pedidos.idPed =" . $id;

        $result1 = $conexion->query($ssql);
       
        // Cerramos la conexión
        $conexion->close();

        return $result1->fetch_all(MYSQLI_ASSOC);
    }
}
