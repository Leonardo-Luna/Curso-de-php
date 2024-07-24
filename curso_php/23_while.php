<?php

/*

La estructua while permite repetir un bloque de código N veces hasta que se cumple una
condición de corte.

*/

$c = 0;

while($c <= 10) { # Mientras el valor de $c sea menor o igual a 10 se repite el bloque de las llaves
    echo $c; # Imprimo $c
    echo "<br/>"; # Salto de línea
    $c++; # Incremento su valor para que no quede en bucle infinito
}

$c = 20;

while($c >= 10) { # Mientras el valor de $c sea mayor o igual a 10
    echo $c . "<br/>";
    $c--;
}

?>