<?php
include_once "../model/Productos.php";

// Intentamos obtener todos los productos


    $listaProductos = Productos::getAllProd();
    if($_POST){
    $listaProdCli = Productos::getProdCli();
    $tabla = "";
    $tabla .= "<table>";  
    $tabla .= "<tr><th>Nombre del cliente</th><th>Nombre del pedido</th><th>Precio</th><th>Cantidad</th></tr>";
    //Mostramos los registros
    foreach ($listaProdCli as $row) {
    $tabla .= '<tr>';
    $tabla .= '<td>' . $row["cn"] . '</td>';
    $tabla .=  '<td>' . $row["pn"] . '</td>';
    $tabla .=  '<td>' . $row["pp"] . '</td>';
    $tabla .=  '<td>' . $row["cc"] . '</td>';
    $tabla .=  '</tr>';
    }
    $tabla .= "</table>";
    }else{
       $tabla = "";
    }


// Incluimos la vista
include_once "../vista/index.php";
?>
