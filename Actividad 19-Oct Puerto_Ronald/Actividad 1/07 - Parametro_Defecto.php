<?php

function contar_hasta($numero = 10) {
    for ($i = 1; $i <= $numero; $i++) {
        echo "$i ";
    }
}

contar_hasta(); 
echo '<br>';
contar_hasta(8); 

?>