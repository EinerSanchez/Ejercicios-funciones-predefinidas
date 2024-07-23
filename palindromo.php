<?php 
//Cree una función llamada “esPalindromo” que reciba una cadena de texto como parámetro y 
//devuelve true si la cadena es un palíndromo y false si no lo es.  

// Pedir cadena de texto
$texto = readline("Ingrese un texto: ");
function esPalindromo($cadena) {
 
  // Revertir la cadena
  $revertida = strrev($cadena);
  // Comparar la cadena original con la revertida
  return $cadena === $revertida;
}

// Llamar a la función esPalindromo
if (esPalindromo($texto)) {
  echo "True: '$texto' es un palíndromo.\n";
} else {
  echo "False: '$texto' no es un palíndromo.\n";
}

?>