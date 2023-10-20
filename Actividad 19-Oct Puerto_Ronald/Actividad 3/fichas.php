<?php

declare(strict_types=1);

class Aprendiz {
    private string $nombres;
    private string $genero;
    private int $edad;
    private int $telefono;

    public function __construct(string $nombres, string $genero, int $edad, int $telefono) {
        $this->nombres = $nombres;
        $this->genero = $genero;
        $this->edad = $edad;
        $this->telefono = $telefono;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getTelefono() {
        return $this->telefono;
    }
}

class Fichas {
    private string $nombreCurso;
    private int $numFicha;
    private int $numAprendices;
    private array $aprendices = [];

    public function __construct(string $nombreCurso, int $numFicha, int $numAprendices) {
        $this->nombreCurso = $nombreCurso;
        $this->numFicha = $numFicha;
        $this->numAprendices = $numAprendices;
    }

    public function getNombreCurso() {
        return $this->nombreCurso;
    }

    public function getNumFicha() {
        return $this->numFicha;
    }

    public function getNumAprendices() {
        return $this->numAprendices;
    }

    public function agregarAprendiz(Aprendiz $aprendiz) {
        $this->aprendices[] = $aprendiz;
    }

    public function getAprendices() {
        return $this->aprendices;
    }
}

$aprendiz1 = new Aprendiz("Ronald Puerto", "Masculino", 18, 1019762940);
$aprendiz2 = new Aprendiz("Valentina Avila", "Femenino", 19, 3212983210);

$ficha1 = new Fichas("ADSO", 2693630, 2);
$ficha1->agregarAprendiz($aprendiz1);
$ficha1->agregarAprendiz($aprendiz2);

echo 'Ficha: ' . $ficha1->getNombreCurso() . ' - ' . $ficha1->getNumFicha() . '<br>';
echo 'Numero de aprendices: ' . $ficha1->getNumAprendices() . '<br>';

foreach ($ficha1->getAprendices() as $aprendiz) {
    echo 'Nombre: ' . $aprendiz->getNombres() . ' - Genero: ' . $aprendiz->getGenero() . ' - Edad: ' . $aprendiz->getEdad() . ' - Telefono: ' . $aprendiz->getTelefono() . '<br>';
}

?>