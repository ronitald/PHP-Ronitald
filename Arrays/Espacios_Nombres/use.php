<?php

require('clase2.php');

use Sena as S;

$persona1 = new S\Persona('MAIKOL', 'maik@gmail.com', 'Buenos Dias!');
echo 'Imprimiendo datos de la clase Persona en el espacio de nombres Sena' . '<br>';
echo 'NOMBRES: ' . $persona1 -> nombre . '<br>';
echo 'CORREO: ' . $persona1 -> correo . '<br>';
echo 'SALUDO: ' .S\Persona::$saludo . '<br>';

?> 