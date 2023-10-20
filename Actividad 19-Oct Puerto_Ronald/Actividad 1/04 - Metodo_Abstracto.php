<?php

abstract class Vehiculo {
    abstract public function montarse_vehiculo();
}

class Carro extends Vehiculo {
    public function montarse_vehiculo() {
        return "Montando en el carro...";
    }
}

class Bicicleta extends Vehiculo {
    public function montarse_vehiculo() {
        return "Montado la bicicleta...";
    }
}

$carro = new Carro();
echo $carro -> montarse_vehiculo() . '<br>';

$bicicleta = new Bicicleta();
echo $bicicleta -> montarse_vehiculo() . '<br>';

?>