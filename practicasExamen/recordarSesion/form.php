<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="procesar_login.php" method="POST">
    <label for="username">Usuario:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <label for="recordarme">Recordarme:</label>
    <input type="checkbox" id="recordarme" name="recordarme">
    <br>
    <input type="submit" value="Iniciar sesión">
</form>

</body>
</html>