<?php
// Nodo del árbol
class Node {
    public $value;
    public $left;
    public $right;

    public function __construct($value) {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
}

/**
 * Value -> El dato que recibiremos
 * Left -> referencia al hijo que se encuentra a la izquierda
 * Right-> referencia al hijo que se encuentra a la derecha
*/


/*Árbol Binario de Búsqueda
Tener en cuenta que:
todos los valores menores a la raiz van a la izquierda
Todos los valores mayores a la raiz van a la derecha
*/
class BinarySearchTree {
    public $root; //Es la raiz del arbol (el primer nodo)

    //por lo que al inicio, esta vacio == null
    public function __construct() {
        $this->root = null;
    }

    //Inserta un valor en el arbol
    //Usa recursión: si el valor es menor, va a la izquierda; si el valor es mayor, va a laderecha
    //Ejemplo: (50,30,70)
    //  50
    //30  70
    public function insert($value) {
        $this->root = $this->insertNode($this->root, $value);
    }

    private function insertNode($node, $value) {
        if ($node === null) {
            return new Node($value);
        }
        if ($value < $node->value) {
            $node->left = $this->insertNode($node->left, $value);
        } elseif ($value > $node->value) {
            $node->right = $this->insertNode($node->right, $value);
        }
        return $node;
    }

    // Búsqueda
    //Recorre el arbol comparando:
    //Si el valor buscado es menor -> baja por la izquierda
    //Si el valor buscado es mayor -> baja por la derecha
    //Si lo encuentra devuelve True
    public function search($value) {
        return $this->searchNode($this->root, $value);
    }

    private function searchNode($node, $value) {
        if ($node === null) {
            return false;
        }
        if ($value == $node->value) {
            return true;
        }
        if ($value < $node->value) {
            return $this->searchNode($node->left, $value);
        } else {
            return $this->searchNode($node->right, $value);
        }
    }

    // Eliminación
    // Casos:
    // Nodo sin hijos -> se elimina directamente
    // Nodo con un hijo -> se reemplaza por ese hijo
    // Nodo con dos hijos -> se busca el minimo del subarbol derecha y se reemplaza
    public function delete($value) {
        $this->root = $this->deleteNode($this->root, $value);
    }

    private function deleteNode($node, $value) {
        if ($node === null) {
            return null;
        }

        if ($value < $node->value) {
            $node->left = $this->deleteNode($node->left, $value);
        } elseif ($value > $node->value) {
            $node->right = $this->deleteNode($node->right, $value);
        } else {
            // Caso 1: sin hijos
            if ($node->left === null && $node->right === null) {
                return null;
            }
            // Caso 2: un hijo
            if ($node->left === null) {
                return $node->right;
            } elseif ($node->right === null) {
                return $node->left;
            }
            // Caso 3: dos hijos
            $minValue = $this->findMin($node->right);
            $node->value = $minValue;
            $node->right = $this->deleteNode($node->right, $minValue);
        }
        return $node;
    }

    private function findMin($node) {
        while ($node->left !== null) {
            $node = $node->left;
        }
        return $node->value;
    }

    // Recorrido en orden (para mostrar el árbol ordenado)
    // Recorre el arbol en orden izquierda -> raiz -> derecha
    // devuelve los valores ordenados
    public function inorderTraversal($node = null) {
        if ($node === null) {
            $node = $this->root;
        }
        if ($node !== null) {
            $this->inorderTraversal($node->left);
            echo $node->value . " ";
            $this->inorderTraversal($node->right);
        }
    }
}


$bst = new BinarySearchTree();

// Inserción
$bst->insert(50);
$bst->insert(30);
$bst->insert(70);
$bst->insert(20);
$bst->insert(40);
$bst->insert(60);
$bst->insert(80);

echo "Recorrido en orden: ";
$bst->inorderTraversal(); // 20 30 40 50 60 70 80

// Búsqueda
echo $bst->search(40) ? "Encontrado\n" : "No encontrado\n";

// Eliminación
$bst->delete(30);
echo "Después de eliminar 30: ";
$bst->inorderTraversal(); // 20 40 50 60 70 80


/*
- Inserción: Inserta los valores [15, 10, 20, 8, 12, 17, 25] y muestra el recorrido en orden.
- Búsqueda: - Implementa una función que devuelva "Encontrado" o "No encontrado" al buscar un valor en el árbol.
- Eliminación: - Inserta los valores [25, 20, 30] y elimina el nodo 20.
- Eliminación: - Inserta [40, 35, 50, 45] y elimina el nodo 50.
- Eliminación: - Inserta [60, 50, 70, 65, 80] y elimina el nodo 70.
- Implementa un método getHeight() que calcule la altura del árbol.
- Crea un método countNodes() que devuelva el número total de nodos en el árbol.
*/

?>