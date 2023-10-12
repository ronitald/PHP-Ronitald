<?php

// UNA CLASE ABSTRACTA FUNCIONA PARA HACER HEREDADA POR OTRAS... 
// NO SE PUEDE INSTANCIAR.
// LAS CLASES ABSTRACTAS SE USAN PARA ESTANDARIZAR LAS APLICACIONES.
// UNA CLASE ABSTRACTA SERVIRA PARA SER HEREDADA POR OTRAS CLASES.

abstract class Figura {
    private string $nombre;
    private float $num_lados;

    public function __construct(string $nombre, float $num_lados) {
        $this -> nombre = $nombre;
        $this -> num_lados = $num_lados;
    }

    public function get_nombre() {
        return $this->nombre;
    }

    public function get_num_lados() {
        return $this->num_lados;
    }

    public function imprimir() {
        echo 'SOY UN METODO DE: ' . Figura::get_nombre() .'<br>';
        echo '<br>';
    }
}

class Triangulo extends Figura {
    private float $base;
    private float $altura;

    public function __construct(float $base, float $altura) {
        parent::__construct('TRIANGULO', 3);
        $this -> base = $base;
        $this -> altura = $altura;
    }

    public function calcular_area() {
        $area = ($this -> base * $this -> altura) / 2;
        return $area;
    }

    public function get_base() {
        return $this -> base;
    }

    public function get_altura() {
        return $this -> altura;
    }
}

// INSTANCIA DEL TRIANGULO
$triangulo1 = new Triangulo(20, 5);
$area_triangulo = $triangulo1 -> calcular_area();

$triangulo1 -> imprimir();
echo 'NOMBRE DE LA FIGURA: ' . $triangulo1 -> get_nombre() . '<br>';
echo 'NUMERO DE LADOS: ' . $triangulo1 -> get_num_lados() . '<br>';
echo 'BASE: ' . $triangulo1 -> get_base() . '<br>';
echo 'ALTURA: ' . $triangulo1 -> get_altura() . '<br>';
echo 'EL AREA DEL TRIANGULO ES: ' . $triangulo1 -> calcular_area() . '<br>';

?>  