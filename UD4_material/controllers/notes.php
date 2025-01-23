<?php
include_once "../models/note.php";
session_start();
$notesJSON = json_decode("../data/notes.json", true);
if (isset($_POST['password'])){
    $pass = $_POST['password'];
    $_SESSION['contraseña'] = $pass;
}
if (isset($_POST['username'])){
    $user = $_POST['username'];
    $_SESSION['usuario'] = $user;
}


?>