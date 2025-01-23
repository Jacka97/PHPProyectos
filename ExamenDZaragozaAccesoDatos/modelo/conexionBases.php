<?php
 /*Crear conexion con la base de datos*/

 class conexionBD {
 
     private static $hostname = "127.0.0.1";
     private static $database = "empresa_db";
     private static $user = "phpmyadmin";
     private static $password = "1234";
    //abrir conexion con la base
     public static function conectar(){
         try {
             $conexion = new mysqli(self::$hostname, self::$user, self::$password, self::$database);    
             
         } catch (mysqli_sql_exception $error) {
             
             echo "¡ERROR: !".$error->getMessage();
             die();
             
         }
         
         return $conexion;
     }
     // cerrar conexion con la base
     public static function cerrarConexion($conexion){
         $conexion->close();
     }
 }
 
 ?>
?>