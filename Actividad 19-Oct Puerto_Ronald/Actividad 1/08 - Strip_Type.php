<?php

declare(strict_types=1);

function unir_palabras(string $palabra1, string $palabra2) {
    return $palabra1 . $palabra2;
}

$palabras1 = unir_palabras('Ronald' , 'Puerto');

// $palabras2 = unir_palabras('Ronald', 21); ESTO GENERA ERROR, YA QUE SE ESTA USANDO
// UN ENTERO CUANDO ESTA ESTRICTAMENTE ESPECIFICADO UN STRING.

?>