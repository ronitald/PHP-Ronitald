<?php

declare(strict_types=1);

class Computador {
    private string $fabricante;
    private string $cap_memoria;
    private string $tipo_memoria;
    private string $cap_almacenamiento;
    private string $sistema_operativo;
    private string $suite_oficina;
    private string $procesador;
    private int $num_puertos_usb;
    private static int $contador = 0;

    public function __construct(string $fabricante, string $cap_memoria, string $tipo_memoria, string $cap_almacenamiento, string $sistema_operativo, string $suite_oficina, string $procesador, int $num_puertos_usb) {
        $this -> fabricante = $fabricante;
        $this -> cap_memoria = $cap_memoria;
        $this -> tipo_memoria = $tipo_memoria;
        $this -> cap_almacenamiento = $cap_almacenamiento;
        $this -> sistema_operativo = $sistema_operativo;
        $this -> suite_oficina = $suite_oficina;
        $this -> procesador = $procesador;
        $this -> num_puertos_usb = $num_puertos_usb;
        self::$contador+=1;
    }

    // METODO ESTATICO RETURN CONTEO DE OBJETOS
    public static function obtener_contador() {
        return self::$contador;
    }
    
    // GETTERS
    public function get_fabricante() {
        return $this -> fabricante;
    }
    public function get_cap_memoria() {
        return $this -> cap_memoria;
    }    
    public function get_tipo_memoria() {
        return $this -> tipo_memoria;
    }
    public function get_cap_almacenamiento() {
        return $this -> cap_almacenamiento;
    }
    public function get_sistema_operativo() {
        return $this -> sistema_operativo;
    }
    public function get_suite_oficina() {
        return $this -> suite_oficina;
    }
    public function get_procesador() {
        return $this -> procesador;
    }
    public function get_num_puertos_usb() {
        return $this -> num_puertos_usb;
    }

    // SETTERS
    public function set_fabricante($fabricante){
        $this -> fabricante = $fabricante;
    }
    public function set_cap_memoria($cap_memoria){
        $this -> cap_memoria = $cap_memoria;
    }
    public function set_tipo_memoria($tipo_memoria){
        $this -> tipo_memoria = $tipo_memoria;
    }
    public function set_cap_almacenamiento($cap_almacenamiento){
        $this->cap_almacenamiento = $cap_almacenamiento;
    }
    public function set_sistema_operativo($sistema_operativo){
        $this->sistema_operativo = $sistema_operativo;
    }
    public function set_suite_oficina($suite_oficina){
        $this->suite_oficina = $suite_oficina;
    }
    public function set_procesador($procesador){
        $this->procesador = $procesador;
    }
    public function set_num_puertos_usb($num_puertos_usb){
        $this->num_puertos_usb = $num_puertos_usb;
    }

    // METODO ESTATICO RETURN FECHA DEL DIA ACTUAL
    public static function obtener_fecha() {
    return date('Y-m-d');
    }
}

?>