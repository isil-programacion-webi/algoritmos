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
    public $inicio;
    public $fin;

    public function __construct() {
        $this->inicio = null;
        $this->fin = null;
    }

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

}