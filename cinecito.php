<?php

function __autoload($name)
{
    include_once 'includes/class.' . $name . '.php';
}


$cine[0] = new Cine('Sevilla', 'Calle Churra', 1, new Dimensiones (10, 10, 10), "SL", 155, 50);
$cine[1] = new Cine('Sevilla', 'Calle Giralda', 2, new Dimensiones (3, 3, 3), "SA", 155, 50);
$cine[2] = new Cine('Sevilla', 'Calle Torre del Oro', 1, new Dimensiones (10, 10, 10), "SA", 155, 50);

$object = clone $cine[1];

$object->dimensiones->alto = 20;
$object->dimensiones->ancho = 20;
$object->dimensiones->largo = 20;

foreach ($cines as $cine)
    echo $cine . '<br>';
echo $copia;
echo $cines[1];
echo 'Área: ' . $copia->area . ' m2';
?>

<!-- Crea un array cines que contenga 3 instancias de la clase Cine.
Clona el segundo de los cines del array en un objeto nuevo.
Modifica el alto, ancho y largo de las dimensiones del cine clonado.
Utiliza la función __toString() para mostrar por pantalla todos los cines del array y el nuevo cine clonado. -->