<?php

require_once('Automotor.php');

class Automovil extends Automotor {

    // ATRIBUTOS DE LA SUBCLASE AUTOMOVIL
    private string $tipo;
    private string $color;

    // CONSTRUCTOR PADRE INCLUYENDO ATRIBUTOS DE LA CLASE AUTOMOTOR Y LA SUBCLASE AUTOMOVIL
    public function __construct(string $marca, string $modelo, int $precio, string $tipo, string $color) {

        // INVOCANDO EL CONSTRUCTOR DE LA SUPER CLASE
        // PARA ACCEDER A SUS DATOS
        parent::__construct($marca, $modelo, $precio);

        // DECLARANDO EL DESTINO DE LOS ATRIBUTOS DE LA SUBCLASE AUTOMOVIL
        $this -> tipo = $tipo;
        $this -> color = $color;
    }

    public function set_tipo($tipo){
        $this -> tipo=$tipo;
    }
    public function set_color($color){
        $this -> color=$color;
    }
    public function get_tipo(){
        return $this -> tipo;
    }
    public function get_color(){
        return $this -> color;
    }
}

?>