<?php
class Estudiante extends Persona{
    private $numExpediente;

    public function __construct($a, $b, $c, $num){
        parent::__construct($a, $b, $c);
        $this->numExpediente = $num;
    }
    public function getExpediente(){
        return $this->numExpediente;
    }
    public function setExpediente($num){
        $this->numExpediente = $num;
    }
    public function Mostrar(){
        echo "Nombre: " . $this->getNombre() . " - ";
        echo "Email: " . $this->getEmail() . " - ";
        echo "DNI: " . $this->getDNI() .  " - ";
        echo "Expediente: " . $this->getExpediente() . "</br>";
    }
    }
?>