
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Detalles del Empleado</title>
    </head>
    <body>
        <form action="../controlEmpleados.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $empleado['nombre'] ?>">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" value="<?php echo $empleado['apellido'] ?>" >
            <label for="salario">Salario</label>
            <input type="number" id="salario" name="salario" value="<?php echo $empleado['salario'] ?>" readonly>
            <label for="fecha">Fecha Contratacion</label>
            <input type="date" id="fecha" name="fecha" value="<?php echo $empleado['fecha_contratacion']?>">
            <label for="puesto" >Puesto</label>
            <input type="text" id="puesto" name="puesto" value="<?php echo $emmpleado['puesto']?>" >
            <input type="submit" value="Guardar Cambios">
            <input type="reset" value="Cancelar">

        </form>
    </body>
</html>