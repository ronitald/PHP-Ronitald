<?php

require_once('Automotor.php');

class Camion extends Automotor {

    // ATRIBUTOS DE LA SUBCLASE AUTOMOVIL
    private int $num_ejes;
    private float $cap_carga;

    // CONSTRUCTOR PADRE INCLUYENDO ATRIBUTOS DE LA CLASE AUTOMOTOR Y LA SUBCLASE CAMION
    public function __construct(string $marca, string $modelo, int $precio, int $num_ejes, float $cap_carga) {

        // INVOCANDO EL CONSTRUCTOR DE LA SUPER CLASE
        // PARA ACCEDER A SUS DATOS
        parent::__construct($marca, $modelo, $precio);

        // DECLARANDO EL DESTINO DE LOS ATRIBUTOS DE LA SUBCLASE CAMION
        $this -> num_ejes = $num_ejes;
        $this -> cap_carga = $cap_carga;
    }

    public function set_num_ejes($num_ejes){
        $this -> num_ejes=$num_ejes;
    }
    public function set_cap_carga($cap_carga){
        $this -> cap_carga=$cap_carga;
    }
    public function get_num_ejes(){
        return $this -> num_ejes;
    }
    public function get_cap_carga(){
        return $this -> cap_carga;
    }
}
