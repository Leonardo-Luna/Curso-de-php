<?php

/*

El bucle foreach es una forma simple de recorrer sobre todos los elementos de array.

*/

# Sintáxis 1: Tomar los valores de cada posición

$personas = array("Leo", "Pepe", "Gonza", "Pedro", "Juan", "Eze");

foreach($personas as $valor) {
    echo $valor . "<br/>";
}

# Sintáxis 2: Tomar las claves y valores de cada posición

$informacion = [
    "nombre" => "Leo",
    "apellido" => "Luna",
    "edad" => 20
];

foreach($informacion as $clave => $valor) {
    echo "Clave {$clave} | Valor {$valor} <br/>";
}

?>