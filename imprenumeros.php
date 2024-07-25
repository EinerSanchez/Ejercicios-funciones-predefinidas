<?php
//numeros y rango del 1-100
$numeros = range(1, 100);
//declaro funcion 
function FierroAlv($numeros) {
    foreach ($numeros as $numero) {
        if ($numero % 3 == 0 && $numero % 5 == 0) {
            echo "PesoPluma,";
        } elseif ($numero % 3 == 0) {
            echo "Peso,";
        } elseif ($numero % 5 == 0) {
            echo "Pluma,";
        } else {
            echo "$numero,";
        }
    }
}
//llamo funcion
FierroAlv($numeros);