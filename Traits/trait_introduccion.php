<?php

trait Mensaje {
public function imprimir_mensaje() {
    echo "USANDO UN TRAIT EN PHP PARA POO! ";
    }
}

class Bienvenido {
    use Mensaje;
}

$objeto1 = new Bienvenido();
$objeto1 -> imprimir_mensaje();

?>