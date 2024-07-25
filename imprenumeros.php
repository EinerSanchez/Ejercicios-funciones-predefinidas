<?php
//numeros y rango del 1-100
$numeros = range(1, 100);
//declaro funcion 
function FierroAlv($numeros) {
    foreach ($numeros as $numero) {
        if ($numero % 3 == 0 && $numero % 5 == 0) {
            echo "PesoPluma\n";
        } elseif ($numero % 3 == 0) {
            echo "Peso\n";
        } elseif ($numero % 5 == 0) {
            echo "Pluma\n";
        } else {
            echo "$numero\n";
        }
    }
}
//llamo funcion
FierroAlv($numeros);