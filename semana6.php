<?php

echo '<h3>Estructura basica de una lista enlazada</h3>';

class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList {
    public $head = null;

    public function search($value) {
        echo '<h3>Busqueda de un valor en lista</h3>';
        $current = $this->head;
        while ($current !== null) {
            if ($current->data === $value) {
                return true;
            }
            $current = $current->next;
        }
        return false;
    }
    
    public function modifyAt($position, $newValue) {
        echo '<h3>Modificar un valor en una posicion especifica de una lista</h3>';
        $current = $this->head;
        $index = 0;
        while ($current !== null) {
            if ($index === $position) {
                $current->data = $newValue;
                return true;
            }
            $current = $current->next;
            $index++;
        }
        return false;
    }

    public function deleteByValue($value) {

        echo '<h3>Eliminar un nodo de una lista</h3>';
        if ($this->head === null) return false;

        if ($this->head->data === $value) {
            $this->head = $this->head->next;
            return true;
        }

        $current = $this->head;
        while ($current->next !== null) {
            if ($current->next->data === $value) {
                $current->next = $current->next->next;
                return true;
            }
            $current = $current->next;
        }
        return false;
    }


    public function sort() {

        echo '<h3>Ordena una lista</h3>';
        if ($this->head === null) return;

        $swapped = true;
        while ($swapped) {
            $swapped = false;
            $current = $this->head;
            while ($current->next !== null) {
                if ($current->data > $current->next->data) {
                    $temp = $current->data;
                    $current->data = $current->next->data;
                    $current->next->data = $temp;
                    $swapped = true;
                }
                $current = $current->next;
            }
        }
    }

    public function insert($value) {
        $newNode = new Node($value);
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }


    public function display() {
        
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " -> ";
            $current = $current->next;
        }
        echo "NULL\n";
    }

}

$list = new LinkedList();
$list->insert(5);
$list->insert(3);
$list->insert(9);
$list->insert(1);

echo '<h3>La lista original es: </h3>'. "\n";
$list->display();


echo "¿Existe el 9? " . ($list->search(9) ? "Sí" : "No") . "\n";

$list->modifyAt(2, 7);
echo "Después de modificar posición 2 a 7:\n";
$list->display();

$list->deleteByValue(3);
echo "Después de eliminar el 3:\n";
$list->display();

$list->sort();
echo "Lista ordenada:\n";
$list->display();


/**
 * 
 * Ejercicios:
 * 
 * Crear un metodo llamado insert, que reciba un valor y
 *  agregue un nodo al final de la lista
 * 
 * Crear una lista enlazada con 10 valores, luego 
 *  un metodo que modifique el valor de un determinada posición
 */
?>