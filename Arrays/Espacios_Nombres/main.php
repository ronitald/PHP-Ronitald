<?php

require('clase1.php');

$persona1 = new Abc\Persona('RONALD PUERTO', 'ronaldpuerto65@gmail.com', 'Buenos Dias!');
echo 'Imprimiendo datos de la clase Persona en el espacio de nombres Abc' . '<br>';
echo 'NOMBRES: ' . $persona1 -> nombre . '<br>';
echo 'CORREO: ' . $persona1 -> correo . '<br>';
echo 'SALUDO: ' . Abc\Persona::$saludo . '<br>';

require('clase2.php');

echo '<br>';
$persona1 = new Abc\Persona('RONALD PUERTO', 'ronaldpuerto65@gmail.com', 'Buenos Dias!');
echo 'Imprimiendo datos de la clase Persona en el espacio de nombres Sena' . '<br>';
echo 'NOMBRES: ' . $persona1 -> nombre . '<br>';
echo 'CORREO: ' . $persona1 -> correo . '<br>';
echo 'SALUDO: ' . Abc\Persona::$saludo . '<br>';

?>