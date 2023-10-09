<?php

require('estatico.php');
// require_once('estatico.php'); "IMPORTA UNA VEZ OBLIGATORIAMENTE"
// include('estatico.php'); "IMPORTAR DE MODO OPCIONAL"

// INSTANCIA DEL EMPLEADO
$empleado1 = new Empleado ('Maikol', '25-3-2000');
$empleado2 = new Empleado ('Valentina', '25-4-1996');
$empleado3 = new Empleado ('Ronald', '17-8-2005');


// Objeto empleado invocando un método no estático clásico
$empleado1->metodoNoEstatico();

// Clase Empleado invocando a un método estático con el operador PHP ::
Empleado::metodoEstatico();

// Clase Empleado invocando y modificando su atributo estático
Empleado::$nacionalidad = 'Colombiana';
echo "Tengo nacionalidad: " . Empleado::$nacionalidad.'<br>';
$empleado1->contar();
echo '<br>';
$empleado2->contar();
echo '<br>';
$empleado3->contar();

?>