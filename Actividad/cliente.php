<?php 

class Cliente {
    private int $id_cliente;
    private string $nombres;
    private int $telefono;

    public function __construct($id_cliente, $nombres, $telefono) {
        $this->id_cliente = $id_cliente;
        $this->nombres = $nombres;
        $this->telefono = $telefono;
    }
// METODOS GET
    public function get_id_cliente() {
        return $this -> id_cliente;
    }
    public function get_nombres() {
        return $this -> nombres;
    }
    public function get_telefono() {
        return $this -> telefono;
    }

// METODOS SET
    public function set_id_cliente($id_cliente) {
        $this -> id_cliente = $id_cliente;
    }
    public function set_nombres($nombres) {
        $this -> nombres = $nombres;
    }
    public function set_telefono($telefono) {
        $this -> telefono = $telefono;
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
$cliente1 = new Cliente ('01', 'MAIKOL STIVEN', 3852147690);
$cliente2 = new Cliente ('02', 'DANA JIMENEZ', 3578921046);
$cliente3 = new Cliente ('03', 'RONALD PUERTO', 3857269140);
$cliente4 = new Cliente ('04', 'VALENTINA AVILA', 3456789123);
$cliente5 = new Cliente ('05', 'CRISTIAN LEON', 3591247860);

// OBJETOS
echo '<br>' . 'CLIENTE 1:';
echo '<br>' . 'ID: ' . $cliente1 -> get_id_cliente();
echo '<br>' . 'NOMBRES: ' . $cliente1 -> get_nombres();
echo '<br>' . 'TELEFONO: ' . $cliente1 -> get_telefono();
echo '<br>';
echo '<br>' . 'CLIENTE 2:';
echo '<br>' . 'ID: ' . $cliente2 -> get_id_cliente();
echo '<br>' . 'NOMBRES: ' . $cliente2 -> get_nombres();
echo '<br>' . 'TELEFONO: ' . $cliente2 -> get_telefono();
echo '<br>';
echo '<br>' . 'CLIENTE 3:';
echo '<br>' . 'ID: ' . $cliente3 -> get_id_cliente();
echo '<br>' . 'NOMBRES: ' . $cliente3 -> get_nombres();
echo '<br>' . 'TELEFONO: ' . $cliente3 -> get_telefono();
echo '<br>';
echo '<br>' . 'CLIENTE 4:';
echo '<br>' . 'ID: ' . $cliente4 -> get_id_cliente();
echo '<br>' . 'NOMBRES: ' . $cliente4 -> get_nombres();
echo '<br>' . 'TELEFONO: ' . $cliente4 -> get_telefono();
echo '<br>';
echo '<br>' . 'CLIENTE 5:';
echo '<br>' . 'ID: ' . $cliente5 -> get_id_cliente();
echo '<br>' . 'NOMBRES: ' . $cliente5 -> get_nombres();
echo '<br>' . 'TELEFONO: ' . $cliente5 -> get_telefono();
