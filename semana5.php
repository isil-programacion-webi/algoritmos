<?php

##Ejemplo 1: Definición de un nodo

class Nodo {
    public $dato;
    public $siguiente;

    public function __construct($dato) {
        $this->dato = $dato;
        $this->siguiente = null;
    }
}



##Ejemplo 2: Crear y enlazar nodos manualment
$nodo1 = new Nodo("PHP");
$nodo2 = new Nodo("Algoritmos");
$nodo3 = new Nodo("Listas Enlazadas");

$nodo1->siguiente = $nodo2;
$nodo2->siguiente = $nodo3;

// Recorrer la lista
$actual = $nodo1;
while ($actual !== null) {
    echo $actual->dato . "\n";
    echo '<br/>';
    $actual = $actual->siguiente;
}
echo '<br/>';

##Ejemplo 3: Clase  con inserción al final
class ListaEnlazada {
    public $inicio = null;

    public function insertar($dato) {
        $nuevo = new Nodo($dato);
        if ($this->inicio === null) {
            $this->inicio = $nuevo;
        } else {
            $actual = $this->inicio;
            while ($actual->siguiente !== null) {
                $actual = $actual->siguiente;
            }
            $actual->siguiente = $nuevo;
        }
    }

    public function mostrar() {
        $actual = $this->inicio;
        while ($actual !== null) {
            echo $actual->dato . "\n";
            $actual = $actual->siguiente;
        }
    }
}

$lista = new ListaEnlazada();
$lista->insertar("Curso");
$lista->insertar("de");
$lista->insertar("Algoritmos");
$lista->mostrar();

echo '<br/>';


?>