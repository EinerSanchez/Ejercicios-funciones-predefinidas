<?php
//Escribe una función llamada “generarFibonacci” que reciba un numero entero como parámetro 
//y genere y devuelva una lista con la secuencia de Fibonacci hasta ese número. 

//declaro funcion
function generarFibonacci($num1,$num2){
   $suma = $num1 + $num2;
   return $suma;
   //retorna el numero de la suma
  }

for($i=0; $i<10; $i++){
    echo "La suma de 1 es: ".generarFibonacci($i, $i)."\n";
}