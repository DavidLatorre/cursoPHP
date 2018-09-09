<?php

//Arreglo

$arreglo = 
[
    'keyStr1' => 'lado',
    0 => 'ledo',

    'keyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo'
];

echo "<h1>Ejercicio PHP</h1>";

echo "Lado, $arreglo[0], $arreglo[keyStr2], $arreglo[1], $arreglo[2]<br>"; 
echo "Decirlo al revés lo dudo<br>";
echo "Ludo, $arreglo[1], $arreglo[keyStr2], $arreglo[0], $arreglo[keyStr1]<br>";
echo "¡Qué trabajo me ha costado!";

echo "<h1>Arreglo Ciudades</h1>";
$paises = 
[
    [
    'Colombia' =>    "Bogotá", "Medellín", "Cali"
    ],

    [
    'Usa' => "San Francisco, New Orleans, Boston"
    ]
    
];

echo $paises[$Colombia[1]];

?>