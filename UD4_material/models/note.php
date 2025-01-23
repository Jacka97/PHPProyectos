<?php
$notas = array(); // array de notas
session_start();
$user = $_SESSION['usuario'];
$pass = $_SESSION['password'];
$notesJSON = json_decode('../data/notes.json', true);
$_SESSION["notas"] = $notesJSON;

if(isset($_POST['note'])){
    $nota = $_POST['note'];
}
$time = time();

$texto1 = '- Mensaje:';
$texto1 .= $nota;


$notas[0] = $texto1;
$texto2 = '- Fecha:';
$texto2 .= $time;
$notas[1] = $texto2;
$notesJSON.array_push($notas);
json_encode($notesJSON);

header('Location: ../views/dashboard.php'); /// NO SE POR QUE CUANDO VUELVO A DASHBOARD NO ME DETECTA LA SESION






?>
