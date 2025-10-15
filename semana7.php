<?php
//1. Crear una clase Nodo y una clase ListaDoble


class Nodo {
    public $dato;
    public $anterior;
    public $siguiente;

    public function __construct($dato) {
        $this->dato = $dato;
        $this->anterior = null;
        $this->siguiente = null;
    }
}

class ListaDoble {
    public $inicio = null;
    public $fin= null;

    //2. Insertar elementos al final de la lista
    public function insertarFinal($dato) {
        $nuevo = new Nodo($dato);
        if ($this->inicio === null) {
            $this->inicio = $nuevo;
            $this->fin = $nuevo;
        } else {
            $this->fin->siguiente = $nuevo;
            $nuevo->anterior = $this->fin;
            $this->fin = $nuevo;
        }
    }

    //3. Recorrer la lista hacia adelante y hacia atrás
    public function recorrerAdelante() {
        $actual = $this->inicio;
        while ($actual !== null) {
            echo $actual->dato . " ";
            $actual = $actual->siguiente;
        }
    }

    public function recorrerAtras() {
        $actual = $this->fin;
        while ($actual !== null) {
            echo $actual->dato . " ";
            $actual = $actual->anterior;
        }
    }       
    
    //4. Eliminar un nodo con un valor específico
    public function eliminar($valor) {
        $actual = $this->inicio;
        while ($actual !== null) {
            if ($actual->dato === $valor) {
                if ($actual->anterior !== null) {
                    $actual->anterior->siguiente = $actual->siguiente;
                } else {
                    $this->inicio = $actual->siguiente;
                }

                if ($actual->siguiente !== null) {
                    $actual->siguiente->anterior = $actual->anterior;
                } else {
                    $this->fin = $actual->anterior;
                }
                return true;
            }
            $actual = $actual->siguiente;
        }
        return false;
    }

    //5. Insertar elementos al inicio de la lista
    public function insertarInicio($dato) {
        $nuevo = new Nodo($dato);
        if ($this->inicio === null) {
            $this->inicio = $nuevo;
            $this->fin = $nuevo;
        } else {
            $nuevo->siguiente = $this->inicio;
            $this->inicio->anterior = $nuevo;
            $this->inicio = $nuevo;
        }
    }

    //6. Listar lista enlazada
    public function listar() {
        $actual = $this->inicio; // corregido
        $listaValores = [];

        while ($actual !== null) {
            $listaValores[] = $actual->dato;
            $actual = $actual->siguiente;
        }

        echo implode(" -> ", $listaValores);
        echo "\n";
    }

    //7. Listar lista enlazada inverso
    public function listar_inverso() {
        $actual = $this->fin; // corregido
        $listaValores = [];

        while ($actual !== null) {
            $listaValores[] = $actual->dato;
            $actual = $actual->anterior;
        }

        echo implode(" <- ", $listaValores);
        echo "\n";
    }
}



$miLista = new ListaDoble();

$miLista->insertarFinal(10);
$miLista->insertarFinal(20);
$miLista->insertarFinal(30);

$miLista->listar(); // 10 -> 20 -> 30

echo '<br/>';
$miLista->listar_inverso(); // 30 <- 20 <- 10
echo '<br/>';

$miLista->insertarInicio(5); // Lista: 5 -> 10 -> 20 -> 30
$miLista->eliminar(20);      // Lista: 5 -> 10 -> 30

$miLista->listar();  
echo '<br/>';        // Esperado: 5 -> 10 -> 30
$miLista->listar_inverso();  // Esperado: 30 <- 10 <- 5
