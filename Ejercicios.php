<?php


/**
 * Arreglos bidimensionales
 * Ejercicio: Calcular
 * Enunciado:
 * Calcula la suma total de todos los elementos del arreglo dimensional.

 * Arreglos bidimensionales
 * Ejercicio: Recorrer arreglos
 * Enunciado:
 * Dado un arreglo bidimensional de números, recórrelo e imprime cada elemento con su posición [fila][columna].
 *
 * Arreglos bidimensionales
 * Ejercicio: Busqueda
 * Enunciado:
 * Implementa una función que reciba un número y retorne su posición [fila][columna] si existe en la matriz
 * 
 * Listas enlazadas simple
 * Ejercicio: Lista como historial de navegación
 * Enunciado:
 * Crea una clase LinkedList que permita insertar elementos al final de la lista y recorrerla para 
 * mostrar sus valores. Cada nodo debe contener un dato y un puntero al siguiente nodo.
 * 
 * Listas enlazadas doble
 * Ejercicio: Lista como historial de navegación
 * Enunciado:
 * Simula un historial de navegación donde puedes ir hacia adelante y hacia atrás.
 *  Implementa métodos goBack() y goForward() que cambien el nodo actual.

 * Ejercicio: clonar lista
 * Enunciado:* 
 * Implementa un método cloneList() que retorne una copia exacta de la lista actual, sin compartir referencias entre nodos.
 */

$array =array(10,20,30);
$suma = 0;
foreach($array as $a){
    $suma += $a;
}

echo $suma;

echo '<br/>';
$s = 0;
for($i=0; $i < count($array); $i++){
    $s += $array[$i];
}

echo $s;

$matriz = array(
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9)
);
$sum2=0;
$sum = 0;
foreach ($matriz as $fila){
    foreach ($fila as $valor) {
        $sum += $valor;
    }
}

for ($i=0; $i < count($matriz) ; $i++) { 
    for ($j=0; $j < count($matriz[$i]) ; $j++) { 
        $sum2 += $matriz[$i][$j];
    }
}
echo $sum2;

function busqueda($valor){

$busqueda = false;
    $arreglo = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );
    foreach ($arreglo as $fila){
        foreach ($fila as $val) {
            if ($val === $valor) {
            $busqueda = true;
            }
        }
    }
    if ($busqueda) {
        return true;
    }else{
        return false;
    }
}
if (busqueda(100)) {
    echo "Se encontro";
}else{
    echo "No se encontro";
}




function busqueda2($valor){

    $busqueda =     false;
    $arreglo = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    for ($i=0; $i < count($arreglo) ; $i++) { 
        for ($j=0; $j < count($arreglo[$i]) ; $j++) { 
            if ($arreglo[$i][$j] === $valor) {
                echo "la posicion del valor: ". $valor . " es " . $i . " y ". $j;
            }
        }
    }
   
    
}
echo "<br/> ";
busqueda2(9);