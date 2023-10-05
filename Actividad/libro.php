<?php 

class Libro {
    private string $titulo;
    private string $autor;
    private float $precio;

    public function __construct($titulo, $autor, $precio) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
    }
// METODOS GET
    public function get_titulo() {
        return $this -> titulo;
    }
    public function get_autor() {
        return $this -> autor;
    }
    public function get_precio() {
        return $this -> precio;
    }

// METODOS SET
    public function set_titulo($titulo) {
        $this -> titulo = $titulo;
    }
    public function set_autor($autor) {
        $this -> autor = $autor;
    }
    public function set_precio($precio) {
        $this -> precio = $precio;
    }
}

// FUNCION DEVOLVER FECHA
function devolver_fecha_hora() {
    $fecha_actual = date ("Y-m-d H:i:s");
    return $fecha_actual ;
}

$fecha_actual = devolver_fecha_hora();
echo 'FECHA ACTUALMENTE: ' . $fecha_actual;
echo '<br>';

// INSTANCIAS
$libro1 = new Libro ('HARRY POTTER', 'J.K. ROWLING', 15.99);
$libro2 = new Libro ('EL PRINCIPITO', 'ANTOINE', 12.50);
$libro3 = new Libro ('MATILDA', 'ROALD DAHL', 10.75);
$libro4 = new Libro ('EL GATO CON BOTAS', 'CHARLES PERRAULT', 6.50);
$libro5 = new Libro ('CAPERUCITA ROJA', 'HERMANOS GRIMM', 7.99);

// OBJETOS
echo '<br>' . 'LIBRO 1:';
echo '<br>' . 'TITULO: ' . $libro1 -> get_titulo();
echo '<br>' . 'AUTOR: ' . $libro1 -> get_autor();
echo '<br>' . 'PRECIO: ' . $libro1 -> get_precio();
echo '<br>';
echo '<br>' . 'LIBRO 2:';
echo '<br>' . 'TITULO: ' . $libro2 -> get_titulo();
echo '<br>' . 'AUTOR: ' . $libro2 -> get_autor();
echo '<br>' . 'PRECIO: ' . $libro2 -> get_precio();
echo '<br>';
echo '<br>' . 'LIBRO 3:';
echo '<br>' . 'TITULO: ' . $libro3 -> get_titulo();
echo '<br>' . 'AUTOR: ' . $libro3 -> get_autor();
echo '<br>' . 'PRECIO: ' . $libro3 -> get_precio();
echo '<br>';
echo '<br>' . 'LIBRO 4:';
echo '<br>' . 'TITULO: ' . $libro4 -> get_titulo();
echo '<br>' . 'AUTOR: ' . $libro4 -> get_autor();
echo '<br>' . 'PRECIO: ' . $libro4 -> get_precio();
echo '<br>';
echo '<br>' . 'LIBRO 5:';
echo '<br>' . 'TITULO: ' . $libro5 -> get_titulo();
echo '<br>' . 'AUTOR: ' . $libro5 -> get_autor();
echo '<br>' . 'PRECIO: ' . $libro5 -> get_precio();
echo '<br>';