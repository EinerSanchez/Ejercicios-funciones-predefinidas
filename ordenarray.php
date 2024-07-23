<?php
//Crea un función llamada “ordenarArray” que reciba un arreglo 
//de números como parámetro y lo ordene de menor a mayor utilizando el algoritmo de ordenamiento burbuja.
//Declaro funcion
function ordenarArray($array) {
    $n = count($array);
    //hago uso de ordenamiento burbuja
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}
//variable con numeros
$array = [5, 2, 8, 3, 1, 6, 4,9,7];
$array = ordenarArray($array);

print_r($array); 