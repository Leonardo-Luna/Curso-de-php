<?php

/*

Igualdad                ==              Verifica el contenido
Idéntico                ===             Verifica el contenido y tipo
Distinto                !=              Verifica el contenido
No idéntico             !==             Verifica el contenido y el tipo
Mayor que               >               Verifica el contenido
Menor que               <               Verifica el contenido
Mayor o igual que       <=              Verifica el contenido
Menor o igual que       >=              Verifica el contenido

*/

$numero = 1;
var_dump("1" == $numero); # Imprime verdadero, el valor es el mismo

var_dump("1" === $numero); # Imprime falso, el valor es el mismo pero no su tipo

$numero = 2;
var_dump("1" > $numero); # Imprime falso, 1 no es mayor que 2

$numero = 1;
var_dump("1" >= $numero); # Imprime verdadero, porque evalúa si es mayor o igual, en este caso son iguales

$numero = 5;
var_dump("1" != $numero); # Imprime verdadero, porque $numero ahora vale 5

var_dump("1" != $numero); # Imprime verdadero, porque son de distinto tipo y valor

?>