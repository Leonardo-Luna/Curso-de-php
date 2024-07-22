<?php

# Array: Colección de elementos

# 2 formas de definirlos
$arreglo1 = array(1, 2, 3, 4, 5); # Utilizando la palabra clave array()
$arreglo2 = [1,2,3,4,5]; # Utilizando corchetes

# Escalar: php asigna las posiciones de manera automática, empezando desde 0
$personas = array("Leo", "Pepe", "Gonza", "Pedro", "Juan", "Eze");

echo $personas[0]; # Imprime "Leo"
echo $personas[2]; # Imprime "Gonza"

$personas[3] = "Renato"; # Reemplaza el valor "Pedro" por "Renato"

# Asociativo: Se asigna una clave de forma manual para poder acceder a los elementos
$informacion = [
    "nombre" => "Leo",
    "apellido" => "Luna",
    "edad" => 20
];

echo $informacion["nombre"]; # Imprime "Leo"
echo $informacion["edad"]; # Imprime "20"

$informacion["pais"] = "Argentina"; # Se le agrega una nueva posición con la clave "País" y valor "Argentina"

echo $informacion["pais"]; # Imprime "Argentina"

# Multidimensionales: Arrays con arrays adentro

# Arreglo de dos dimensiones
$cursada = [
    "año" => "Segundo",
    "semestre" => 1,
    "materias" => ["Fundamentos de Organización de Datos", "Algoritmos y Estructuras de Datos", "Seminario de Lenguajes"]
];

echo $cursada["año"]; # Imprime "Segundo"
echo $cursada["materias"][0]; # Imprime "Fundamentos de Organización de Datos"
echo $cursada["materias"][2]; # Imprrime "Seminario de Lenguajes"

# Contar cantidad de elementos
echo count($informacion); # Imprime 4 (nombre, apellido, edad y país)
echo count($cursada["materias"]); # Imprime 3
echo count($cursada, COUNT_RECURSIVE); # Cuenta el arreglo y sus arreglos interiores, imprime 6

?>