<?php

$multiplos_5 = function ($numero) 
{
    if ($numero % 5 == 0) {
        echo 'El numero es multiplo de 5';
    }
    else {
        echo 'El numero no es multiplo de 5';
    }
};

$multiplos_5 (21);

?>