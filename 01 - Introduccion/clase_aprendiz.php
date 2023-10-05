<?php
// UNA CLASE ES UNA PLANTILLA QUE INDICA COMO SON LOS DATOS
// UN OBJETO ES EL DATO PROPIAMENTE

class Aprendiz {
    // PROPIEDADES O ATRIBUTOS DE LA CLASE
    public string $tipo_doc;
    public string $num_doc;
    public string $nombre;
    public string $apellido;
    public string $correo;
    public int $edad;
    public float $peso;
    public bool $activo;
    
    public function __construct($tipo_doc, $num_doc, $nombre, $apellido, $correo, $edad, $peso, $activo) {
        $this->tipo_doc = $tipo_doc;
        $this->num_doc = $num_doc;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->edad = $edad;
        $this->peso = $peso;
        $this->activo = $activo;
    }
}

// CREAR OBJETOS DE LA CLASE APRENDIZ
$aprendiz1 = new Aprendiz ('CC', '1019762940', 'RONALD', 'PUERTO', 'ronaldpuerto65@gmail.com', 18, 45, 1);

echo '<br>' . 'TIPO DE DOCUMENTO: ' . $aprendiz1 -> tipo_doc;
echo '<br>' . 'NUMERO DE DOCUMENTO: ' . $aprendiz1 -> num_doc;
echo '<br>' . 'NOMBRE: ' . $aprendiz1 -> nombre;
echo '<br>' . 'APELLIDO: ' . $aprendiz1 -> apellido;
echo '<br>' . 'CORREO: ' . $aprendiz1 -> correo;
echo '<br>' . 'EDAD: ' . $aprendiz1 -> edad;
echo '<br>' . 'PESO: ' . $aprendiz1 -> peso;
echo '<br>' . 'ACTIVO: ' . $aprendiz1 -> activo;