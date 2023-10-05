<?php
// ENCAPSULAMIENTO 

class Docente {
    private string $tipo_doc;
    private string $num_doc;
    
    public function __construct($tipo_doc, $num_doc) {
        $this->tipo_doc = $tipo_doc;
        $this->num_doc = $num_doc;
    }

    // METODOS 'GET' PARA OBTENER LOS DATOS DE LA CLASE
    public function get_tipo_doc() {
        return $this -> tipo_doc;
    }
    public function get_num_doc() {
        return $this -> num_doc;
    }

    // METODOS 'SET' PARA OBTENER LOS DATOS DE LA CLASE
    public function set_tipo_doc($tipo_doc) {
        $this -> tipo_doc = $tipo_doc;
    }
    public function set_num_doc($num_doc) {
        $this -> num_doc = $num_doc;
    }
}

// CREAR INSTANCIA
$docente1 = new Docente ('CC', '30785000');
$docente2 = new Docente ('TI', '20784000');
$docente3 = new Docente ('RC', '30900000');
$docente4 = new Docente ('TI', '45346896');
$docente5 = new Docente ('CC', '43457768');

// CREAR UN OBJETO ($docente1) ESE OBJETO INVOCO AL METODO (get).
echo '<br>' . 'DOCENTE 1:';
echo '<br>' . 'TIPO DE DOCUMENTO: ' . $docente1 -> get_tipo_doc();
echo '<br>' . 'NUMERO DE DOCUMENTO: ' . $docente1 -> get_num_doc();
echo '<br>';
echo '<br>' . 'DOCENTE 2:';
echo '<br>' . 'TIPO DE DOCUMENTO: ' . $docente2 -> get_tipo_doc();
echo '<br>' . 'NUMERO DE DOCUMENTO: ' . $docente2 -> get_num_doc();
echo '<br>';
echo '<br>' . 'DOCENTE 3:';
echo '<br>' . 'TIPO DE DOCUMENTO: ' . $docente3 -> get_tipo_doc();
echo '<br>' . 'NUMERO DE DOCUMENTO: ' . $docente3 -> get_num_doc();
echo '<br>';
echo '<br>' . 'DOCENTE 4:';
echo '<br>' . 'TIPO DE DOCUMENTO: ' . $docente4 -> get_tipo_doc();
echo '<br>' . 'NUMERO DE DOCUMENTO: ' . $docente4 -> get_num_doc();
echo '<br>';
echo '<br>' . 'DOCENTE 5:';
echo '<br>' . 'TIPO DE DOCUMENTO: ' . $docente5 -> get_tipo_doc();
echo '<br>' . 'NUMERO DE DOCUMENTO: ' . $docente5 -> get_num_doc();

// EL OBJETO ($docente1) LLAMA AL METODO (set).
$docente1 -> set_tipo_doc('CC');
$docente1 -> set_num_doc('3285000');