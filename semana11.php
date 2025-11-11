<?php

/*
Crear una función recursiva que calcule el factorial de un número entero positivo.
*/

function factorial($n) {
    // Caso base
    if ($n === 0 || $n === 1) {
        return 1;
    }

    // Llamada recursiva
    return $n * factorial($n - 1);
}

// Ejemplo de uso
$numero = 5;
echo "El factorial de $numero es: " . factorial($numero);



function fibonacci($n) {
    // Caso base
    if ($n === 0) {
        return 0;
    } elseif ($n === 1) {
        return 1;
    }

    // Llamada recursiva
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// Ejemplo de uso
$posicion = 6;
echo "El número Fibonacci en la posición $posicion es: " . fibonacci($posicion);


//TAREA

// Diseñar una función recursiva que sume los dígitos de un número entero. sumDigitos([1,2,3,4]) -> 10
// Crear una función recursiva que invierta una cadena de texto.
// Implementar una función recursiva que cuente cuántos elementos hay en un arreglo sin usar count(). contarElementos([1,2,3,4]) ->4
// Crear una función recursiva que cuente cuántas veces aparece un número específico en un arreglo. contarOcurrencias([1,2,3,2,4,2],2) -> 3






?>