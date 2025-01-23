<?php
include_once("../modelo/admins.php");
include_once("../modelo/empleado.php");

// Includes para comprobar los usuarios y la clase, donde incluye los empleados
session_start();
$empleados = Empleado::listarEmpleados();
if(isset($_POST)){
    $usu = $_POST["username"];
    $pass = $_POST["password"];
    // Se guardan las variables
    if($usu = "Dios" && $pass = "123456"){
        $_SESSION["usu"] = $usu;
        echo "Sesion iniciada como Dios";
        include_once("../vista/showListaEmpleados.php");
    }else if($usu = "administrador" && $pass = "1234"){
        $_SESSION["usu"] = $usu;
        echo "Sesion iniciada como administrador";
        include_once("../vista/showListaEmpleados.php"); 
}else{
    //En caso de que no coincida, devuelve al index
    echo "Usuario o contraseña incorrectos";
    header("Location: ../index.html");
}
}
// Da undefined
if(isset($_GET)){

    if(isset($_GET["show"]) && $_GET['show'] == 'true'){
        $id = $_GET['id'];
        var_dump($id);
        $empleado = Empleado::listarEmpleadoID($id);
        $_SESSION['empleado'] = $empleado;
        include_once("../vista/showEmpleado.php");
    }
    if(isset($_GET['edit']) && $_GET['edit'] == 'true'){
    $id = $_GET['id'];
    var_dump($id);
    $empleado = Empleado::listarEmpleadoID($id);
    $_SESSION['empleado'] = $empleado;
    include_once("../vista/editarEmpleado.php");
    }
    if(isset($_GET['delete']) && $_GET['delete'] == 'true'){
        $id = $_GET['id'];
        Empleado::deleteEmpleadoID($id);
    
}

}
?>