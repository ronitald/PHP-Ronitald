<?php

require_once('computador.php');

class Desktop extends Computador {
    private bool $ups;

    public function __construct(string $fabricante, string $cap_memoria, string $tipo_memoria, string $cap_almacenamiento, string $sistema_operativo, string $suite_oficina, string $procesador, int $num_puertos_usb, bool $ups) {
        parent::__construct($fabricante, $cap_memoria, $tipo_memoria, $cap_almacenamiento, $sistema_operativo, $suite_oficina, $procesador, $num_puertos_usb);
        $this -> ups = $ups;
    }

    // GETTERS
    public function get_ups() {
        return $this -> ups;
    }

    // SETTERS
    public function set_ups($ups) {
        $this -> ups = $ups;
    }
}

?>