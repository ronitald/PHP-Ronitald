<?php

$verificar_par = function($numero) {
    if ($numero % 2 === 0) {
        echo "$numero es un numero par.";
    } else {
        echo "$numero es un numero impar.";
    }
};

$verificar_par(7);
echo '<br>';
$verificar_par(6);

?>