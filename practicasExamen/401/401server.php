
<?php
foreach($_POST as $key => $variable){
    echo $key . ' = ' . $variable . '<br>';
}
echo $_SERVER["HTTP_REFERER"];
?>