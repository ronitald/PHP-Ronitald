<?php

class Empleado {
    protected $nombre;
    protected $fechaNacimiento;
    public static $nacionalidad;
    public static $contador = 0;

    public function __construct($nombre, $fecha_nacimiento){
        $this->nombre = $nombre;
        $this->fechaNacimiento=$fecha_nacimiento;
    }
    public static function metodoEstatico(){
        echo "SOY UN METODO ESTATICO. No necesito un objeto, me invocas desde la clase <br>";
    }
    public function metodoNoEstatico(){
        echo "SOY UN METODO NO ESTATICO. Necesito un objeto que me invoque <br>";
    }
    public function contar(){
        echo "CONTEO: " . self::$contador+=1;
        return;
    }
}

?>