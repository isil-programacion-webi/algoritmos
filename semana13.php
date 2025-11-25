<?php

/*
Ejercicios de Árboles
1. Árbol Binario de Búsqueda – Inserción y recorrido inorden
Enunciado:
Implementa una clase BinarySearchTree que permita insertar nodos y recorrer el árbol en inorden.

*/

class Node {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

class BinarySearchTree {
    public $root;

    public function __construct() {
        $this->root = null;
    }

    public function insert($data) {
        $this->root = $this->insertRec($this->root, $data);
    }

    private function insertRec($node, $data) {
        if ($node == null) return new Node($data);
        if ($data < $node->data) $node->left = $this->insertRec($node->left, $data);
        else $node->right = $this->insertRec($node->right, $data);
        return $node;
    }

    public function inorder($node) {
        if ($node != null) {
            $this->inorder($node->left);
            echo $node->data . " ";
            $this->inorder($node->right);
        }
    }
}

// Ejemplo
$bst = new BinarySearchTree();
$bst->insert(50);
$bst->insert(30);
$bst->insert(70);
$bst->insert(20);
$bst->insert(40);
$bst->insert(60);
$bst->insert(80);

echo "Recorrido inorden: ";
$bst->inorder($bst->root);



/*
 2. Altura de un Árbol Binario
Enunciado:
Crea una función recursiva que calcule la altura de un árbol binario.

*/

function height($node) {
    if ($node == null) return 0;
    $leftHeight = height($node->left);
    $rightHeight = height($node->right);
    return max($leftHeight, $rightHeight) + 1;
}

echo "Altura del árbol: " . height($bst->root);



/**
 * Ejercicios de Grafos 
 * Representación de un Grafo con Lista de Adyacencia
 * Enunciado:
 * Implementa una clase Graph que permita agregar vértices y aristas, y mostrar la lista de adyacencia.
 */


class Graph {
    private $adjList;

    public function __construct() {
        $this->adjList = [];
    }

    public function addVertex($v) {
        if (!isset($this->adjList[$v])) {
            $this->adjList[$v] = [];
        }
    }

    public function addEdge($v, $w) {
        $this->adjList[$v][] = $w;
        $this->adjList[$w][] = $v; // grafo no dirigido
    }

    public function printGraph() {
        foreach ($this->adjList as $vertex => $edges) {
            echo $vertex . " → " . implode(", ", $edges) . "\n";
        }
    }
}

// Ejemplo
$graph = new Graph();
$graph->addVertex("A");
$graph->addVertex("B");
$graph->addVertex("C");
$graph->addEdge("A", "B");
$graph->addEdge("B", "C");
$graph->printGraph();

/**
 * Recorrido BFS (Breadth-First Search)
 * Enunciado:
 * Agrega un método bfs($start) que recorra el grafo en anchura.
 */

function bfs($graph, $start) {
    $visited = [];
    $queue = [];

    array_push($queue, $start);
    $visited[$start] = true;

    while (!empty($queue)) {
        $vertex = array_shift($queue);
        echo $vertex . " ";

        foreach ($graph[$vertex] as $neighbor) {
            if (!isset($visited[$neighbor])) {
                $visited[$neighbor] = true;
                array_push($queue, $neighbor);
            }
        }
    }
}

// Ejemplo con lista de adyacencia
$adjList = [
    "A" => ["B", "C"],
    "B" => ["A", "D"],
    "C" => ["A"],
    "D" => ["B"]
];

echo "Recorrido BFS desde A: ";
bfs($adjList, "A");

/**
 * Recorrido DFS (Depth-First Search)
 *Enunciado:
 *Agrega un método dfs($start) que recorra el grafo en profundidad.
 * 
 */

 function dfs($graph, $start, &$visited) {
    $visited[$start] = true;
    echo $start . " ";

    foreach ($graph[$start] as $neighbor) {
        if (!isset($visited[$neighbor])) {
            dfs($graph, $neighbor, $visited);
        }
    }
}

$visited = [];
echo "Recorrido DFS desde A: ";
dfs($adjList, "A", $visited);