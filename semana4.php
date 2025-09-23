<?php

echo '<h1>Arreglos Bidimensionales</h1>';
echo '<hr/>';

/**Operaciones */
echo '<h2>Operaciones</h2>';

$carreras = array(
  array("Ingenieria", 5),
  array("Doctor", 10),
  array("Enfermeria", 3),
  array("Administracion", 3)
);

//acceder a los elementos:
echo '<h3>acceder a los elementos</h3>';
echo 'La carrera de: ' . $carreras[0][0]; 
echo '<br/>';
echo 'La terminas en: ' . $carreras[0][1]; 

//recorrido
echo '<h3>Recorrido</h3>';
for ($i = 0; $i < count($carreras); $i++) {
  for ($j = 0; $j < count($carreras[$i]); $j++) {
    echo $carreras[$i][$j] . " ";
  }
  echo "<br>";
}

echo '<h3>validacion de datos</h3>';
//validacion de datos
//array conformado por usuario, password y rol
$usuarios = array(
  array("admin", "admin", "administrador"),
  array("prof", "prof", "profesor"),
  array("alum", "alum", "alumno")
);

function checkUser($array, $usu) {
  foreach ($array as $interno) {
    if (in_array($usu, $interno)) {
      echo 'existe';
      return true;
    }
  }
  echo 'no existe';
}

checkUser($usuarios, 'admin');
echo '<br/>';

//ordenamiento ascendente por edad
echo '<h3>ordenamiento ascendente por edad</h3>';

$personas = array(
  array("nombre" => "Ana", "edad" => 28),
  array("nombre" => "Luis", "edad" => 35),
  array("nombre" => "Carlos", "edad" => 22)
);

print_r($personas);
echo '<br/>';
usort($personas, function($a, $b) {
  return $a["edad"] - $b["edad"];
});

print_r($personas);
echo '<br/>';

//inserciones
echo '<h3>Inserciones en array</h3>';
$nuevaPersona = array("nombre" => "María", "edad" => 30);
$personas[] = $nuevaPersona; // Se agrega al final
print_r($personas);
echo '<br/>';

//eliminacion
echo '<h3>Eliminacion en array</h3>';

unset($personas[1]); // Elimina a Luis
$personas = array_values($personas); // Reindexa el arreglo
foreach ($personas as $index => $persona) {
  if ($persona["nombre"] === "Carlos") {
    unset($personas[$index]);
  }
}
$personas = array_values($personas); // Reindexar después de eliminar
print_r($personas);
echo '<br/>';
echo '<hr/>';

/**Matrices especiales*/
echo '<h2>Matrices especiales</h2>';

//Matriz cuadrada
echo '<h3>Matriz cuadrada</h3>';
$matriz = array(
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9)
);

echo $matriz[0][0];// Imprime 1
echo $matriz[2][1]; 

echo '<br/>';

//Matriz cuadrada
echo '<h3>Recorrido de matriz cuadrada</h3>';

for ($i = 0; $i < count($matriz); $i++) {
  for ($j = 0; $j < count($matriz[$i]); $j++) {
    echo $matriz[$i][$j] . " ";
  }
  echo "<br>";
}


//Crear matriz cuadrada de forma dinamica
echo '<h3>Creacion de matriz cuadrada dinamica</h3>';
$tamaño = 6;
$matriz = array();
//creo matriz
for ($i = 0; $i < $tamaño; $i++) {
  for ($j = 0; $j < $tamaño; $j++) {
    $matriz[$i][$j] = rand(1, 100) . " "; // Valores aleatorios
  }
}
//pintado
for ($i = 0; $i < count($matriz); $i++) {
  for ($j = 0; $j < count($matriz[$i]); $j++) {
    echo $matriz[$i][$j] . " ";
  }
  echo "<br>";
}


echo '<hr/>';


echo '<h2>Tarea</h2>';
echo '<p>Ejercicio 1: Recorrer y mostrar
Objetivo: Mostrar todos los elementos de una matriz 3x3.
Instrucciones:
- Usa for o foreach para recorrer la matriz.
- Muestra cada número.
</p>';


echo ' <p>Ejercicio 2: Crear una matriz cuadrada
Objetivo: Declarar una matriz 4x4 con valores numéricos consecutivos del 1 al 16.
Instrucciones:
- Usa un arreglo bidimensional.
</p>';


echo '<p>
Ejercicio 3: Modifica un valor
Objetivo: Modificar el valor en la posición [2][1] de una matriz 3x3.
Instrucciones:
- Crea una matriz 3 x 3 de forma dinamica
- Cambia el valor por 99.
- Muestra la matriz antes y después del cambio.
</p>';

echo '<p>
Ejercicio 4: Ordena una matriz
Objetivo: Crea una matriz bidimensional.
Instrucciones:
- Crea una matriz que tenga campo numerico
- Ordena el campo numerico de forma ascendente.
- Muestra la matriz antes y después.
</p>'

?>