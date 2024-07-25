<?php
//Escribe una función que calcule la suma de todos los dígitos de un numero entero dado.
$numeros = readline("Ingrese un numero: ")

//declaro funcion 
function suma($numeros) {
    $suma = 0;
    while ($numeros > 0) {
        $suma += $numeros % 10;
        $numeros = (int)($numeros / 10);
    }
    
    return $suma;
}

// Llama a la función suma y muestra el resultado
echo "La suma de los dígitos del número ingresado es: " . suma($numeros);
?>