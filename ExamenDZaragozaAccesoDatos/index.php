<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <!-- Formulario de login -->
    <form action="./controlador/autentificacion.php" method="POST">
        <label for="username" >Usuario:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Iniciar Sesión">
    </form>

</body>
</html>