<?php
session_start();
$user = $_SESSION["usuario"];
$pass = $_SESSION["password"];
$usersJSON = json_decode("../data/users.json", true);

function comprobarUsers($user, $usersJSON){
    for($i = 0; $i < count($usersJSON); $i++){
        if($user === $usersJSON[$i][0]){
            return false;
        }
    }
    return true;
}

function registrar($user, $pass, $usersJSON){
    $nuevoUsu = array();
    if(comprobarUsers($user, $usersJSON)){
        $nuevoUsu.array_push($user);
        $nuevoUsu.array_push($pass);
        $usersJSON .= $nuevoUsu;
        json_encode($usersJSON);
        echo "Usuario registrado";
    }else{
        $error = "Ya existe el usuario";
        header("Location: ../views/register.php?error=" . $error);
    }
}
    





   
    






?>