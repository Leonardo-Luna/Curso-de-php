<?php

/*

Existen funciones que permiten verificar si una variable tiene datos o si es nula

isset() verifica si la variable existe y tiene contenido distinto de NULL
is_null() verifica si la variable tiene NULL como contenido

empty() verifica si la variable está vacía

    Una variable se considera vacía cuando:
        - ""        | cadena vacía de caracteres
        - 0         | cero como integer
        - 0.0       | cero como float
        - "0"       | cero como string
        - null 
        - false
        - array()   | array vacío

Adicional:

unset() destruye la variable especificada

*/

# $variableNoDeclarada; #= NULL;# Variable sin declar y sin contenido.
# ^ Si se borra el # inicial, no modifica el resultado del programa.
# ^^ Si se borra el 2do # sigue sin modificar el resultado.

if(isset($variableNoDeclarada)) {
    echo "La variable está definida. <br/>";
}
else {
    echo "La variable no está definida. <br/>";
}

$texto = NULL;

if(is_null($texto)) {
    echo "La variable es NULL. <br/>";
}
else {
    echo "La variable no es NULL. <br/>";
}

$arreglo = array();

if(empty($arreglo)) {
    echo "El arreglo está vacío. <br/>";
}
else {
    echo "El arreglo no está vacío. <br/>";
}

?>