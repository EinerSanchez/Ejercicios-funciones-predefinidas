<?php 
//Cree una función llamada “esPalindromo” que reciba una cadena de texto como parámetro y 
//devuelve true si la cadena es un palíndromo y false si no lo es.  

//ingresar cadena de texto si es en formato palindromo
$cadena = readline("Ingrese cadena de texto: ");

//Creamos funcion de "esPalindromo"
$palabras = str_word_count($cadena, 1);

print_r($palabras);