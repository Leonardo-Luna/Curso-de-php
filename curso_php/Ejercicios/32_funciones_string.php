<?php

$texto = "Hello world!";

# strtolower() pasar todo a minúsculas
echo strtolower($texto);

# strotoupper() pasar todo a mayúsculas
echo strtoupper($texto);

# ucfirst() pasa la primera letra a mayúscula
echo ucfirst($texto);

# ucwords() pasa la primera letra de cada palabra a mayúscula
echo ucwords($texto);

# strlen() devuelve la cantidad de caracteres
echo strlen($texto);

# str_word_count() devuelve la cantidad de palabras
echo str_word_count($texto);

# explode() convierte de string a array
# 2 parámetros obligatorios, delimitador (qué carácter separa las palabras) y el string
$fecha = "23/7/2024";

$arreglo = explode("/", $fecha); # Separo en base a la barra ( / )
echo $arreglo[0] . " - " . $arreglo[1] . " - " . $arreglo[2];

$texto2 = "Uno Dos Tres Cuatro Cinco Seis Siete Ocho Nueve Diez";
$arreglo2 = explode(" ", $texto2); # Separo en base al espacio (  )

foreach($arreglo2 as $valor) {
    echo $valor . "<br/>";
}

# Se le puede pasar un tercer parámetro que es el limitador, indica
# la cantidada de posiciones que tendrá el array
$texto2 = "Uno Dos Tres Cuatro Cinco Seis Siete Ocho Nueve Diez";
$arreglo2 = explode(" ", $texto2, 2); # Limito a 2 posiciones, por lo tanto me queda

# $arreglo[0] = Uno
# $arreglo[1] = Dos Tres Cuatro Cinco Seis Siete Ocho Nueve Diez

foreach($arreglo2 as $valor) {
    echo $valor . "<br/>";
}

# Si se utiliza una posición negativa, se indica qué valores ignorar
# si utilizo -8

# $arreglo[0] = Uno
# $arreglo[1] = Dos

?>