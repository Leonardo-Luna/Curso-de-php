<?php

/*

La expresión match es similar a switch, a diferencia de que esta pregunta por identidad ( === ).

*/

$a = 7;
$b = 10;
$c = 2;
$d = 5;

# La expresión match se almacena en una variable

$resultado = match($a) { # Aclaro sobre qué quiero realizar las comparaciones
    $b => "A es idéntica a B",
    $c => "A es idéntica a C",
    $d => "A es idéntica a D",
    default => "A no coincide con ninguna variable"
};

echo $resultado;

?>