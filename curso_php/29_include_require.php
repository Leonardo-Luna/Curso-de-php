<?php

/*

Ambas funciones sirven para añadir otros archivos al script de php.

include: Trae el código procedente de otro archivo, si no existe el archivo lanza un warning
y el resto se seguirá ejecutando sin problema.

require: Misma operación, pero en caso de no existir el archivo lanza una excepción y frena la
ejecución del programa.

*/

include("27_ejercicio_for.php"); # Trae el código de otro archivo y lo ejecuta
include("Archivo no existente"); # Al no existir un archivo bajo ese nombre, tira un warning
include("28_foreach.php"); # Se ejecuta sin problema

require("Archivo no existente"); # Corta la ejecución del programa 
require("17_if_elseif.php"); # No se llega a ejecutar

/*

Existe una variante para ambas funciones: incluide_once y require_once, el código se incluye una
única vez y no se vuelve a ejecutar si se vuelve a llamar.

*/

include_once("25_do_while.php"); # Se importa y ejecuta el código
include_once("25_do_while.php"); # No hace nada debido a que ya se llamó anteriormente

?>