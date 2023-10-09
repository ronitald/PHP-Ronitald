<?php

class Pared {
    private string $materiales;
    public function __construct($materiales) {
        $this->materiales = $materiales;
        echo 'SOY EL CONSTRUCTOR.' . '<br>' . 'SE EJECUTA AUTOMATICAMENTE.';
        echo '<br>';
    }
    public function get_materiales(){
        return $this->materiales;
    }
    public function set_materiales($materiales){
        $this->materiales = $materiales;
    }
    public function saludar(){
        echo '<br>'.'Invocando un método PHP. ';
    }
}

// DECLARAR UN OBJETO 
$pared_sala = new Pared('Bloque número 5, 20x20 cm');
$pared_baño = new Pared('Bloque número 6, 21x21 cm');
$pared_baño -> saludar();

?>