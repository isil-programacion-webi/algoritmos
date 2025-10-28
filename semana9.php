<?php

class Pila {
    private $elementos = [];

    //agregar
    public function push($item) {
        array_push($this->elementos, $item);
    }

    //eliminar
    public function pop() {
        return array_pop($this->elementos);
    }

    //muestra elemento actual
    public function peek() {
        return end($this->elementos);
    }

    public function isEmpty() {
        return empty($this->elementos);
    }
}


$stack = new Pila();
$stack->push("A");
$stack->push("B");
$stack->push("C");


echo $stack->peek();
echo $stack->pop(); // Muestra "C"
echo $stack->pop(); // Muestra "B"

echo "<br/>";

//iNVERTIR UNA CADENA USANDO UNA PILA
function invertirCadena($cadena) {
    $pila = str_split($cadena);
    $invertida = '';
    while (!empty($pila)) {
        $invertida .= array_pop($pila);
    }
    return $invertida;
}

echo invertirCadena("Hola mundo");
echo "<br/>";

//ELIMINAR DUPLICADOS DE UNA 
function eliminarDuplicados($pila) {
    $vista = [];
    $resultado = [];
    while (!empty($pila)) {
        $elemento = array_pop($pila);
        if (!in_array($elemento, $vista)) {
            array_push($vista, $elemento);
            array_unshift($resultado, $elemento);
        }
    }
    return $resultado;
}

$pila = array(1,2,3,4,4,1,1);


// Mostrar resultado
echo "Pila original: ";
print_r($pila);

echo "\nPila sin duplicados: ";
print_r(eliminarDuplicados($pila));

//Simular historial de navegacion
class Navegador {
    private $atras = [];
    private $adelante = [];
    private $actual;

    public function visitar($pagina) {
        if ($this->actual) array_push($this->atras, $this->actual);
        $this->actual = $pagina;
        $this->adelante = [];
    }

    public function atras() {
        if (!empty($this->atras)) {
            array_push($this->adelante, $this->actual);
            $this->actual = array_pop($this->atras);
        }
    }

    public function adelante() {
        if (!empty($this->adelante)) {
            array_push($this->atras, $this->actual);
            $this->actual = array_pop($this->adelante);
        }
    }

    public function actual() {
        return $this->actual;
    }

     public function mostrarHistorial() {
        echo "← Atrás: " . implode(", ", $this->atras) . "\n";
        echo "→ Adelante: " . implode(", ", array_reverse($this->adelante)) . "\n";
        echo "📍 Actual: " . $this->actual . "\n\n";
    }

}


// Prueba del historial
$navegador = new Navegador();

$navegador->visitar("google.com");
$navegador->visitar("youtube.com");
$navegador->visitar("github.com");
$navegador->mostrarHistorial();

$navegador->atras();
$navegador->mostrarHistorial();

$navegador->atras();
$navegador->mostrarHistorial();

$navegador->adelante();
$navegador->mostrarHistorial();

?>
