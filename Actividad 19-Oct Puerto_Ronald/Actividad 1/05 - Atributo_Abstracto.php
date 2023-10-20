<?php

abstract class Carro {
    private $modelo;

    abstract public function arrancar();
    
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
}

class Deportivo extends Carro {
    public function arrancar() {
        echo "Arrancando el deportivo..." . '<br>';
    }
}

$miCoche = new Deportivo();
$miCoche->setModelo("Mercedes Benz");
$miCoche->arrancar();
echo "Modelo: " . $miCoche->getModelo() . '<br>';

?>