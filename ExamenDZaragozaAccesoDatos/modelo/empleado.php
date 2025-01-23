<?php
include_once("conexionBases.php");
class Empleado{
    private $id;
    private $nombre;
    private $apellido;
    private $salario;
    private $fecha;
    private $puesto;

    public function __construct(int $id = null, string $nombre, string $apellido, float $salario, string $fecha, string $puesto) {
       
          
            $this->$nombre = $nombre;
            $this->$apellido = $apellido;
            $this->$salario = $salario;
            $this->$fecha = $fecha;
            $this->$puesto = $puesto;
        
    }
/* Funcion para listar todos los empleados*/
    public static function listarEmpleados() {
        $sql = "SELECT * FROM empleados ORDER BY id";
        $conexion = conexionBD::conectar();
        $resultado = $conexion->query($sql);
        
        if($resultado){
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }else{
            return [];
        }
        conexionBD::cerrarConexion($conexion);
    }
/* Funcion para listar empleado por id*/
public static function listarEmpleadoID($id){
    $sql = "SELECT * FROM empleados WHERE id = '$id'";
        $conexion = conexionBD::conectar();
        $resultado = $conexion->query($sql);
        
        if($resultado){
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }else{
            return [];
        }
        conexionBD::cerrarConexion($conexion);
}
/* Funcion para actualizar empleado por id*/
public static function actualizarEmpleadoID($id, $nombre, $apellido, $salario, $fecha, $puesto){
    $sql = "UPDATE empleados SET(nombre, apellido, salario, fecha_contratacion, puesto) VALUES ('$nombre','$apellido','$salario','$fecha','$puesto') WHERE id = " . $id;
        $conexion = conexionBD::conectar();
    $resultado = $conexion->query($sql);
    
    if($resultado){
        echo "Empleado actualizado";
    }else{
        return [];
    }
    conexionBD::cerrarConexion($conexion);
}
/* Funcion para eliminar empleado por id*/
public static function deleteEmpleadoID($id){
    $sql = "DELETE FROM empleados WHERE id = '$id'";
        $conexion = conexionBD::conectar();
        $resultado = $conexion->query($sql);
        
        if($resultado){
            echo "Empleado eliminado";
        }else{
            return [];
        }
        conexionBD::cerrarConexion($conexion);
}
/* Funcion para insertar empleado*/

public static function insertEmpleado($nombre, $apellido, $salario, $fecha, $puesto){
    $sql = "INSERT into empleados VALUES($nombre,$apellido, $salario, $fecha, $puesto)";
        $conexion = conexionBD::conectar();
        $resultado = $conexion->query($sql);
        
        if($resultado){
            echo "Insercion realizada";
        }else{
            return [];
        }
        conexionBD::cerrarConexion($conexion);
}
/* Funcion para actualizar salario de todos los empleados salvo gerente*/
public static function updateSalarioEmpleados($salario){
    $sql = "UPDATE empleados SET salario = '$salario' WHERE puesto!= 'Gerente'";
        $conexion = conexionBD::conectar();
        $resultado = $conexion->query($sql);
        
        if($resultado){
            echo "Salarios actualizados";
        } else{
            return [];
        }
        conexionBD::cerrarConexion($conexion);
}
}

?>