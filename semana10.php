<?php

class ColaFIFO {
    private $cola = [];

    public function encolar($elemento) {
        $this->cola[] = $elemento;
    }

    public function desencolar() {
        return array_shift($this->cola);
    }

    public function mostrarCola() {
        return $this->cola;
    }
}

// Prueba
$cola = new ColaFIFO();
$cola->encolar("A");
$cola->encolar("B");
$cola->encolar("C");
echo "Elemento desencolado: " . $cola->desencolar() . "\n";
print_r($cola->mostrarCola());


/* Ejercicio 1: Simulación de atención en ventanilla
*/

$clientes = ["Ana", "Luis", "Carlos", "María"];
$cola = [];

foreach ($clientes as $cliente) {
    array_push($cola, $cliente);
}

while (!empty($cola)) {
    $atendido = array_shift($cola);
    echo "Atendiendo a: $atendido\n";
}


/**
 *  Simulación de impresión de documentos
 */

$documentos = ["Informe.pdf", "Contrato.docx", "Factura.xlsx"];
$colaImpresion = [];

foreach ($documentos as $doc) {
    array_push($colaImpresion, $doc);
    echo "Documento encolado: $doc\n";
}

while (!empty($colaImpresion)) {
    $impreso = array_shift($colaImpresion);
    echo "Imprimiendo: $impreso\n";
}