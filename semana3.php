<?php

echo '<h1>Busqueda y ordenamientos</h1>';
echo '<hr/>';

/**Busqueda secuencial */
echo '<h2>Busqueda secuencial</h2>';
$secuencial = [2,9,4,7,1];
$valor_encontrar = 4;

foreach($secuencial as $numero){
    if($numero ==$valor_encontrar ){
        echo 'El valor es: ' . $numero;
    }
}

echo '<br/>';

/** metodo de la burbjua orden ascendete */
echo '<h2>Ordenamiento burbuja</h2>';
$array = array(20,10,40,80,3);


$n = count($array);

for($i=0; $i < $n -1 ; $i++){


    for($j = 0; $j <$n -$i-1; $j++ ){

      
        if($array[$j] > $array[$j+1]){
            $temporal = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $temporal;
        }
    }
}

print_r($array);



/** 
 * Crear un array e ingresar 10 numeros 
 * Ordenar los elementos de un arreglo en orden ascendente. 
 * Las claves asociativas se reinician.
 * 
 * Crear un array e ingresar 10 apellidos, no deben repetirse.
 * Luego buscar un apellido cualquiera, en caso se encuentre devolver Si existe
 * Caso contrario, devolver No Existe
 * 
 * Crear un array e ingresar 10 frutas 
 * De las 10 futas ingresadas, buscar 1 fruta y pintalar en el explorador
 * 
 * Verificar si el valor "Perú" existe en el array
 * $paises = ["Argentina", "Chile", "Perú", "Brasil", "Colombia"];
 * en caso exista, enviar mensaje Peru esta en la lista,
 * caso contrario, Peru no se encuentra en la lista
 * 
 * Ordenar los productos del siguiente array por precio
 * 
 * $productos = ["Laptop" => 1200, "Mouse" => 25, "Teclado" => 45, "Monitor" => 300];
 * 
 * Ordena un array numerico en forma descendente con el metodo de la burbuja
 * el array ingresado debe tener minimo 10 numeros
 * 
 * Buscar un número en un array ordenado con Bubble Sort
 * el array ingresado debe tener minimo 5 numeros
*/
echo '<h2>Tarea</h2>';

?>