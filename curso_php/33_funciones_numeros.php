<?php

$cantidad = 12732.77;

# Si solo se le pasa el número, lo redondea e imprime agregando la coma ( , )
echo number_format($cantidad) . "<br/>"; # Imprime 12,733

# El segundo parámetro indica la cantidad de decimales que tendrá el número. En caso
# de tener que recortarlo, lo redondea al más cercano
echo number_format($cantidad, 1) . "<br/>"; # Imprime 12,732.8
echo number_format($cantidad, 2) . "<br/>"; # Imprime 12,732.77

# El tercer y cuarto parámetro permiten modificar la forma en la que se muestran los números
# Tercer parámetro: Separador de decimales
# Cuarto parámetro: Separador de millares

echo number_format($cantidad, 1, ",", ".") . "<br/>"; # Imprime 12.732,8
echo number_format($cantidad, 1, ".", ",") . "<br/>"; # Imprime 12,732.8
echo number_format($cantidad, 2, ".", "") . "<br/>"; # Imprime 12732.77

?>