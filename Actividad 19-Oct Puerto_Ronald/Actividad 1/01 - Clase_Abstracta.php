<?php

abstract class Fruta {
    private $nombre;

    public function __construct($nombre) {
        $this -> nombre = $nombre;
    }

    abstract public function obtener_color();
}

class Manzana extends Fruta {
    public function obtener_color() {
        return "ROJA";
    }
}

class Banano extends Fruta {
    public function obtener_color() {
        return "AMARILLO";
    }
}

?>