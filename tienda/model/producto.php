<?php

include_once "conexionBD.php";

class Producto {
    private int $id_producto;
    public string $nombre;
    public string $descripcion;
    public float $precio;

    public function __construct(string $nombre, string $descripcion, float $precio, int $id_producto = null) {
        $this->id_producto = $id_producto;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }

    public static function listarProductos(){
        $conexion = conexionBD::conectar();

        $sql = "SELECT idPed, nombre, descripcion FROM Pedidos ORDER BY nombre";
        $resultado = $conexion->query($sql);

        if($resultado) {
            return $resultado->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }

        conexionBD::cerrarConexion($conexion);
      
    }

    public static function seleccionaVentasProducto($producto) {
        $conexion = conexionBD::conectar();

        $sql = "SELECT Clientes.nombre as nomc, Compras.cantidad as cant, Compras.fecha as fecha
        FROM Compras
        LEFT JOIN Clientes ON Clientes.idCliente = Compras.id_cliente
        LEFT JOIN Pedidos ON Pedidos.idPed = Compras.id_pedido
        WHERE idPed = $producto ORDER BY Clientes.nombre ASC, Compras.fecha DESC;";
                
        $resultado = $conexion->query($sql);

        if($resultado) {
            return $resultado->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }

        conexionBD::cerrarConexion($conexion);
    }



}

?>