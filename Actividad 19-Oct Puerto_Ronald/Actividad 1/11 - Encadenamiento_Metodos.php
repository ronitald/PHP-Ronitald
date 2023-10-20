<?php

class CuentaBancaria {
    private $saldo = 0;

    public function depositar($cantidad) {
        $this->saldo += $cantidad;
        return $this;
    }

    public function retirar($cantidad) {
        $this->saldo -= $cantidad;
        return $this;
    }

    public function get_saldo() {
        return $this->saldo;
    }
}

$cuenta = new CuentaBancaria();
$saldoActual = $cuenta->depositar(3000)->retirar(1500)->get_saldo();

echo 'El saldo actual es: ' . $saldoActual;

?>
