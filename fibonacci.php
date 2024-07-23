<?php
//Escribe una función llamada “generarFibonacci” que reciba un numero entero como parámetro 
//y genere y devuelva una lista con la secuencia de Fibonacci hasta ese número. 

//declaro funcion
function generarFibonacci($n) {
    $fibonacci = [0, 1];
    while ($fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2] <= $n) {
      $fibonacci[] = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
    }
    //retorno numeros de suma y resta 
    return $fibonacci;
  }
  //llamar funcion y implode para seprar los numeros mediante una coma 
  echo implode(', ', generarFibonacci(10));
?>