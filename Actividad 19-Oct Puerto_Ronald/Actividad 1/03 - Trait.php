<?php

trait Fecha {
    public function obtener_fecha() {
        return date('Y-m-d');
    }
}

class User {
    use Fecha;
    public function crear_usuario() {
        echo "Usuario creado el dia: " . $this -> obtener_fecha();
    }
}

$user = new User();
$user -> crear_usuario();

?>