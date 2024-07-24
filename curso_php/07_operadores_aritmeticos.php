<?php

# Jerarquía de operadores: Determina el orden en el que se resuelven las expresiones

/* Prioridad de arriba hacia abajo

1 - Paréntesis ( )
2 - Potencia **
3 - Multiplicación * y división /
4 - Suma + y resta -
5 - Módulo/Resto %

*/

$numero1 = 2;
$numero2 = 5;

$resultado = 2 + 5;
echo $resultado;
echo "<br/>"; # Salto de línea
echo $numero1 + $numero2; 
# ^ ambas producen el mismo resultado

echo "<br/>";
echo $numero2 - $numero1 . " | " . $numero1 - $numero2;

echo "<br/>";
echo $numero1 * $numero2; # 2 x 5

echo "<br/>";
echo $numero2 ** $numero1; # 5 ^ 2

echo "<br/>";
echo $numero2 / $numero1; # 5 / 2

echo "<br/>";
echo $numero2 % $numero1; # Resto de 5 / 2

echo "<br/>";
echo (2+4) * 5; # (2+4) * 5 = 6 * 5 = 30 | Se priorizan los paréntesis

?>