<?php
// Mostrar todos los valores de $_POST
foreach ($_POST as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $item) {
            echo $key . ' = ' . $item . '<br>';
        }
    } else {
        echo $key . ' = ' . $value . '<br>';
    }
}
?>
