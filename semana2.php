<?php

    $frutas = array("platano","manzana","mandarina");

    $frutas2 = ["platano","manzana","mandarina"];


    //obtener platano
    echo $frutas[0];

/**
 * funciones para manipular arrays
 * count(): Devuelve la cantidad de elementos en un array.
 * array_push(): Agrega uno o más elementos al final de un array.
 * array_pop(): Elimina y devuelve el último elemento de un array.
 * array_merge(): Combina dos o más arrays en uno nuevo.
 * 
 * 
 */

echo '<br />';

//Recorrer arrays
foreach($frutas as $fruta){
    echo "la fruta es: " . $fruta . " <br/> ";
}
echo '<br />';


/**
 * in_array() que nos permite verificar el contenido de un array

 * 
 */

    $fruta_abuscar = "vegetal";
    if (in_array( $fruta_abuscar, $frutas)) {
        echo "si existe";
    }else{
        echo "no existe";
    }

echo '<br />';

/**
 * sort(array): Ordena un array en orden ascendente, restableciendo las claves de índices numéricos.
 * 
 * 
 * rsort(array): Ordena un array en orden descendente, restableciendo las claves. 
 * 
 * 
 * asort(array): Ordena un array asociativo por valor en orden ascendente, manteniendo las asociaciones clave-valor. 
 * 
 * 
 * arsort(array): Ordena un array asociativo por valor en orden descendente, manteniendo las asociaciones clave-valor. 
 * 
 * 
 * ksort(array): Ordena un array asociativo por sus claves en orden ascendente.
 * 
 * 
 * krsort(array): Ordena un array asociativo por sus claves en orden descendente. 
 * 
 * 
 * usort(array, callback): Ordena un array por sus valores usando una función de comparación proporcionada por el usuario.
 * 
 * 
 * uksort(array, callback): Ordena un array asociativo por sus claves utilizando una función de comparación definida por el usuario. 

 */

echo '<br />';

$numeros = [3, 1, 4, 5, 2];
asort($numeros);
print_r($numeros); // Salida: [1, 2, 3, 4, 5]

echo '<br />';

$edad = ["Wilder" => 35, "Maria" => 37, "Esther" => 43];

arsort($edad);
print_r($edad); // Salida: ["Ben" => 37, "Peter" => 35, "Joe" => 43]



/**
 * 
 * Guarda en un array los 10 primeros numeros pares, luego imprimelos en el explorador
 * 
 * 
 */


echo '<br />';

$arraynumeros=[];
$nro=1;

while(count($arraynumeros) < 10){
  
    $resultado = $nro % 2;
   
    if( $resultado == 0){
        $arraynumeros[] = $nro;
    }

    $nro++;
    
}
print_r($arraynumeros); 


/**
 * Crear un array e ingresar 10 valores aleatorios, luego Sumar todos los elementos y mostrarlos
 * 
 * Crear un array e ingresar 10 valores aleatorios, luego encuentra el numero mayor y mostrarlo en el explorador
 * 
 * Crear un array e ingresar 10 valores aleatorios, luego encuentra el menor numero para mostrarlo en el explorador
 * 
 * Crear un array e ingresar 10 valores aleatorios, luego ordenarlo en orden ascendente y mostrarlo en el explorador
 * 
 * Guarda en un array los 10 primeros numeros impares, luego imprimelos en el explorador
 * 
 * Crea un array con los 10 primeros numeros pares y multiplicalos por 10, luego imprimelos en el explorador
 * 
 * Crear un array e ingresar 10 valores aleatorios, luego restar el numero mayor con el numero menor y mostrar en pantalla
 * 
 * Crear un array y coloca los 10 primeros numeros de fibonacci - Tarea para la casa
 * 
 */