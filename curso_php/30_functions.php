<?php

/*

Una función es un bloque de código que se puede reutilizar siempre que se necesite con una invocación.
Pueden recibir parámetros y realizar cualquier tipo de tarea.

*/

function saludo() { # Definición de la función
    echo "Hola mundo";
}

saludo(); # Invocación. Cada vez que se utilice esta línea se ejecutará el código que contenta la función

# Se pueden crear funciones que devuelvan valores para poder asignarlos a variables:

function saludo2() {
    return "Hola mundo"; # La instrucción return indica que se va a devolver ese valor
    # Puede almacenarse o directamente usarse.
}

$mensaje = saludo2(); # Se almacena y después imprime
echo $mensaje;

echo saludo2(); # Se imprime directamente lo que retorna

# Los parámetros son variables que se pueden enviar y utilizar dentro de las funciones. A saludo3 es
# necesario pasarle un parámetro y para utilizarlo se debe usar el mismo nombre que el de los paréntesis
function saludo3($nombre) {
    echo "Hola {$nombre}"; 
}

saludo3("Leo"); # Puede pasarse un valor

$nombre = "Leo";
saludo3($nombre); # Como también puede pasarse mediante una variable

# Cuando se tienen múltiples parámetros se separan por una coma ( , ).
function promedio($nota1, $nota2, $nota3) {
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
    return $promedio; 
}

$notaFinal = promedio(6, 8, 7);
echo $notaFinal;

?>