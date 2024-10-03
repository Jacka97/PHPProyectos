<?php

class Persona{
    private $DNI;
    private $nombre;
    private $email;
    
    public function __construct($a, $b, $c){
        $this->DNI = $a;
        $this->nombre = $b;
        $this->email = $c;
    }
    public function Mostrar(){
        echo "Nombre: " . $this->getNombre() . " - ";
        echo "Email: " . $this->getEmail() . " - ";
        echo "DNI: " . $this->getDNI() .  "</br>";
  
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDNI(){
        return $this->DNI;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setNombre($n){
        $this->nombre = $n;
    }
    public function setDNI($d){
        $this->DNI = $d;
    }
    public function setEmail($e){
        $this->email = $e;
    }

}
?>