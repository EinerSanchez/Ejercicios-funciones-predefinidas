<?php
//numeros y rango del 1-100
$numeros = range(1, 100);
//declaro funcion 
function FierroAlv($numeros) {
    $peso = [];
    $pluma = [];
    $pesopluma = [];
    $otros = [];

    foreach ($numeros as $numero) {
        if ($numero % 3 == 0 && $numero % 5 == 0) {
            $pesopluma[] = $numero;
        } elseif ($numero % 3 == 0) {
            $peso[] = $numero;
        } elseif ($numero % 5 == 0) {
            $pluma[] = $numero;
        } else {
            $otros[] = $numero;
        }
    }

    echo "PesoPluma=". implode(',', $pesopluma). "\n";
    echo "Peso=". implode(',', $peso). "\n";
    echo "Pluma=". implode(',', $pluma). "\n";
    echo "Otros=". implode(',', $otros). "\n";
}
//llamo funcion
FierroAlv($numeros);
?>