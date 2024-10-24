<?php
// Mostrar todos los valores de $_SERVER
echo '<h1>Valores de $_SERVER</h1>';
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
foreach($_POST as $key => $variable){
    echo $key . ' = ' . $variable . '<br>';
}
echo $_SERVER["HTTP_REFERER"]."<br>";
?>
