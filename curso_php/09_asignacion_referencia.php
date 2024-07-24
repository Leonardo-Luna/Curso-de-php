<?php

$texto = "Curso de php";

$variable = $texto; # Copia el valor de $texto

$variableRef = &$texto; # Copia la referencia de $texto

# Si se modifica $variable solo se modifica ella misma, mientras que
# si se modifica $variableRef se modifica a ella misma y $texto

echo "Texto: " . $texto . " | Variable: " . $variable;
echo "<br/>";
$variable = "Texto modificado";
echo "Variable: " . $variable . " | Texto: " . $texto . " | Ref: " . $variableRef;
echo "<br/>";
$variableRef = "Variable de referencia modificada";
echo "Ref: " . $variableRef . " | Texto: " . $texto . " | Variable: " . $variable;

?>