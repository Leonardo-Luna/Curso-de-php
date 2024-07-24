<?php

/*

1) Diseñe un programa que imprima los números del 1 hasta el 20.

2) Diseñe un programa que imprima la tabla de multiplicar de un número dado hasta el factor 12.

*/

# 1)

for($i = 1; $i <= 20; $i++) {
    echo $i . "<br/>";
}

# 2)

$numero = 4;

for($i = 1; $i <= 12; $i++) {
    echo "{$numero} x {$i} = " . $numero * $i . "<br/>";
}

?>