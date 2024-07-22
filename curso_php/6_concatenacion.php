<?php

$nombre = "Leo";
$pais = "Argentina";

# Concatenación: Unir textos o variables. En php se utiliza el . 
echo $nombre . " es de " . $pais;

# Interpolación: Mostrar variables dentro de textos. Solo puede realizarse al usar comillas dobles (" ")
echo "$nombre es de $pais";
echo "{$nombre} es de {$pais}";
# ^ ambas producen el mismo resultado

echo '$nombre es de $pais'; # No funciona bien, se imprimen los nombres de las variables

?>