<?php

require_once('automotor.php');

// SUBCLASE INVOCANDO METODOS DE LA SUPERCLASE
$automotor1 = new Automotor('Mercedes-Benz', 'Cabriolet', 69746);
echo 'INFORMACION DEL AUTOMOTOR: ' . '<br>';
echo 'Marca: ' . $automotor1 -> get_marca() . '<br>';
echo 'Modelo: ' . $automotor1 -> get_modelo() . '<br>';
echo 'Precio: ' . $automotor1 -> get_precio() . '<br>';

require_once('automovil.php');

// SUBCLASE INVOCANDO METODOS DE LA SUBCLASE
$automovil1 = new Automovil('Mercedes-Benz', 'Cabriolet', 69746, 'Clase C', 'Gris con Blanco');
echo 'Tipo: ' . $automovil1 -> get_tipo() . '<br>';
echo 'Color: ' . $automovil1 -> get_color() . '<br>';

require_once('camion.php');

$camion1 = new Camion ('Chevrolet', 'Silverado 2500HD', 60000, 6, 40);
echo '<br>';
echo 'INFORMACION DEL CAMIÓN: ' . '<br>';
echo 'Marca Camión: ' . $camion1 -> get_marca() . '<br>';
echo 'Modelo Camión: ' . $camion1 -> get_modelo() . '<br>';
echo 'Precio Camión: ' . $camion1 -> get_precio() . '<br>';
echo 'Numero de ejes del Camión: ' . $camion1 -> get_num_ejes() . '<br>';
echo 'Capacidad de Carga del Camión: ' . $camion1 -> get_cap_carga() . '<br>';
$automovil1 -> saludar();

?>