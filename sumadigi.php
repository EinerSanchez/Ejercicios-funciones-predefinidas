<?php
// Pedimos al usuario que ingrese un número
$numeros = readline("Ingrese un número: ");

// Declaramos la función suma
function suma($numeros) {
    $suma = 0;
    while ($numeros > 0) {
        $suma += $numeros % 10;
        $numeros = (int)($numeros / 10);
    }
    
    return $suma;
}

// Llamamos a la función suma y mostramos el resultado
echo "La suma de $numeros es: ". suma($numeros);
?>