<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Empleados</title>
        <style>
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 5px;
            }

            .accion {
                display: block;
                margin-bottom: 10px;
            }
        </style>
    </head>

    <body>
        <h1>Lista de Empleados</h1>
        <a class="accion" href="">Agregar nuevo empleado</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Salario</th>
                    <th>Fecha de Contratación</th>
                    <th>Puesto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                foreach($empleados as $empleado){
                    echo "<tr>";
                    echo "<td>$empleado[id]</td>";
                    echo "<td>$empleado[nombre]</td>";
                    echo "<td>$empleado[apellido]</td>";
                    echo "<td>$empleado[salario]</td>";
                    echo "<td>$empleado[fecha_contratacion]</td>";
                    echo "<td>$empleado[puesto]</td>"; 

                    //Variables undefined
                    echo "<td><a href='autentificacion.php?id='".$empleado['id']."?show=true>Ver</a><a href='autentificacion.php?id='".$empleado['id']. "?edit=true>Editar</a><a href='autentificacion.php?id='".$empleado['id']. "?delete=true>Eliminar</a>";
                }
                ?>     
                </tr>
            </tbody>
        </table>
        <?php
        if($_SESSION['usu'] == "Dios"){
        echo '<a class="accion" href="../controlador/autentificacion.php">Actualizar salario empleados (salvo gerente)</a>';
        }
        ?>
    </body>
</html>