<?php

/*

Los operadores lógicos permiten combinar expresiones simples en más complejas, se evalúan y devuelven un booleano

Y       and - &&
O       OR - ||
No      !

*/

$numero1 = 2;
$numero2 = 5;

# AND necesita que todas las expresiones sean verdaderas para que se cumpla
var_dump($numero1 == 2 && $numero2 == 5);
# Imprime verdadero si $numero1 es igual a 2 y $numero2 es igual a 5 | Devuelve verdadero

var_dump($numero1 == 2 && $numero2 == 2);
# Imprime verdadero si $numero1 es igual a 2 y $numero2 es igual a 2 | Devuelve falso

# OR necesita que una expresión sea verdadera para que se cumpla
var_dump($numero1 == 2 || $numero2 == 5);
# Imprime verdadero si $numero1 es igual a 2 o $numero2 es igual a 5 | Devuelve verdadero

var_dump($numero1 == 2 || $numero2 == 2);
# Imprime verdadero si $numero1 es igual a 2 o $numero2 es igual a 2 | Devuelve verdadero

# NOT niega la operación

var_dump(!($numero1 == 2));
# Imprime falso, ya que se está negando el resultado de la operación. $numero1 es igual a 2, lo niego con !

?>