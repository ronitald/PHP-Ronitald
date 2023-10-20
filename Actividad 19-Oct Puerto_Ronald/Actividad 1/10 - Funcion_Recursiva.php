<?php

function calcular_area($longitud, $ancho) {
    $area = $longitud * $ancho;
    return $area;
}

$longitud = 10;
$ancho = 5;
$area = calcular_area($longitud, $ancho);

echo 'El área es: ' . $area;

?>