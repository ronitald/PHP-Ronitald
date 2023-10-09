<?php

require_once('computador.php');

class Laptop extends Computador {
    private bool $tactil;
    private string $pot_bateria;

    public function __construct(string $fabricante, string $cap_memoria, string $tipo_memoria, string $cap_almacenamiento, string $sistema_operativo, string $suite_oficina, string $procesador, int $num_puertos_usb, bool $tactil, string $pot_bateria) {
        parent::__construct($fabricante, $cap_memoria, $tipo_memoria, $cap_almacenamiento, $sistema_operativo, $suite_oficina, $procesador, $num_puertos_usb);
        
        $this -> tactil = $tactil;
        $this -> pot_bateria = $pot_bateria;
    }

    // GETTERS
    public function get_tactil() {
        return $this -> tactil;
    }
    public function get_pot_bateria() {
        return $this -> pot_bateria;
    }

    // SETTERS
    public function set_tactil($tactil) {
        $this -> tactil = $tactil;
    }
    public function set_pot_bateria($pot_bateria) {
        $this -> pot_bateria = $pot_bateria;
    }
}

?>