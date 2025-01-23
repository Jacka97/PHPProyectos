<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas - Login</title>
    <style>
        button {
            width: 120px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            background-color: #556871;
            color: white;
            border: 0;
            cursor: pointer;
        }

        div {
            margin-top: 10px;
        }

        label {
            display: block;
        }
        label.lateral {
            display: inline;
            margin-left: 10px;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php // SI hay cookies pone el usuario y contraseña, si no las hay, no las usa
    if(isset($_COOKIE['usuario']) && isset($_COOKIE['contraseña'])){
        $user = $_COOKIE['usuario'];
        $pass = $_COOKIE['contraseña'];

    }else{
        $user = "";
        $pass = "";
    }
    ?>
    <h1>Login de usuario</h1>
    
    <form action="../controllers/auth.php" method="post">  
       <div>
            <label>Usuario:</label> 
            <input type="text" name="username" value="<?php echo $user ?>"required  />  
        </div>
        <div>
            <label>Contraseña:</label> 
            <input type="password" name="password"  value="<?php echo $pass ?>"required />  
        </div>
        <div>
            <input type="checkbox" name="recordarme" /> 
            <label class="lateral">Recordarme</label>  
        </div>
        <div>
            <button type="submit" name="login">Entrar</button>  
        </div>
    </form>

    <div class="error">
    </div>
</body>
</html>