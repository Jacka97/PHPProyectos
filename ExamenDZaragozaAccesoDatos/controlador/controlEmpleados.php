<?php
include_once("../modelo/empleado.php");

if(isset($_POST)){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $salario = $_POST["salario"];
    $telefono = $_POST["fecha"];
    $puesto = $_POST["puesto"];

    Empleado::insertEmpleado($nombre, $apellido, $salario, $telefono, $puesto);
    include_once("../vista/showListaEmpleados.php");
    
}
?>