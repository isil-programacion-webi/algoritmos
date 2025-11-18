<?php

/**
 * Nota:
 * Usamos recursividad para recorrer, ordenar o buscar elementos en arreglos.
 */

/**
 * RECURSIVIDAD EN ESTRUCTURAS ESTÁTICA
 */
//Ejemplo: Suma recursiva de elementos de un arra
function sumaRecursiva($array, $index = 0) {
    if ($index >= count($array)) return 0;
    return $array[$index] + sumaRecursiva($array, $index + 1);
}

$numeros = [2, 4, 6, 8];
echo sumaRecursiva($numeros); // Resultado: 20


// Ejemplo: Búsqueda recursiva en arra
function buscarElemento($array, $valor, $index = 0) {
    if ($index >= count($array)) return false;
    if ($array[$index] === $valor) return true;
    return buscarElemento($array, $valor, $index + 1);
}

$datos = [10, 20, 30, 40];
echo buscarElemento($datos, 30) ? "Encontrado" : "No encontrado";

/**
 * RECURSIVIDAD EN ESTRUCTURAS DINÁMICA
 */

// Ejemplo: Recorrido en árbol binario
class Nodo {
    public $valor;
    public $izquierda;
    public $derecha;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->izquierda = null;
        $this->derecha = null;
    }
}

function recorridoInOrden($nodo) {
    if ($nodo === null) return;
    recorridoInOrden($nodo->izquierda);
    echo $nodo->valor . " ";
    recorridoInOrden($nodo->derecha);
}

// Crear árbol
$raiz = new Nodo(10);
$raiz->izquierda = new Nodo(5);
$raiz->derecha = new Nodo(15);
$raiz->izquierda->izquierda = new Nodo(2);

// Recorrido
recorridoInOrden($raiz); // Salida: 2 5 10 15


//Ejemplo: Conteo de nodos en lista enlazado

class NodoLista {
    public $valor;
    public $siguiente;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->siguiente = null;
    }
}

function contarNodos($nodo) {
    if ($nodo === null) return 0;
    return 1 + contarNodos($nodo->siguiente);
}

// Crear lista
$n1 = new NodoLista(1);
$n2 = new NodoLista(2);
$n3 = new NodoLista(3);
$n1->siguiente = $n2;
$n2->siguiente = $n3;

echo contarNodos($n1); // Resultado: 3



/** 
 * Ejercicios
 */

/**
 * EJERCICIOS: RECURSIVIDAD EN ESTRUCTURAS ESTÁTICAS
 */

// Suma recursiva de un arreglo
// Implementa una función recursiva que reciba un array de enteros
// y devuelva la suma total de sus elementos.
//Entrada de prueba
// [3, 5, 2, 8, 1] → Resultado esperado: 19




// Buscar un valor en un array
// Crea una función recursiva que determine si un valor existe en un array.
// Debe devolver true o false.
//Entrada de prueba
// buscar([10, 20, 30, 40], 30) → true
// buscar([10, 20, 30, 40], 50) → false


// Invertir un array recursivamente
// Escribe una función recursiva que invierta un array sin usar funciones 
// de PHP como array_reverse.
// Entrada de prueba
// [1, 2, 3, 4] → [4, 3, 2, 1]



/**
 * EJERCICIOS: RECURSIVIDAD EN ESTRUCTURAS DINÁMICAS
 */

// Implementa una clase Nodo con valor y siguiente.
// Luego crea una función recursiva que cuente cuántos nodos hay en la lista.
// Entrada de prueba
// 1 → 2 → 3 → null → Resultado esperado: 3
