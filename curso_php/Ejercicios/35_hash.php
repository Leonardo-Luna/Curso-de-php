<?php

/*

Hash: La función criptográfica de hash es un algoritmo matemática que transforma cualquier
bloque de datos en una serie de caracteres con longitud fija.

Independientemente de la longitud de los datos, el resultado "hasheado" siempre tendrá
la misma longitud.

*/

# Funciones que ya no son tan comunes

$texto = "Ejemplo";

echo md5($texto); # Devuelve la cadena hasheada
echo sha1($texto); 

echo hash("md5", $texto); # Se puede usar de esta forma e indicar el método de hash

foreach(hash_algos() as $algoritmo) {
    echo $algoritmo . "<br/>"; # Imprime todos los algoritmos posibles de la función hash()
}

# Forma "óptima" de utilizar hash

$textoHasheado = password_hash($texto, PASSWORD_BCRYPT);
# Esta función de hash devuelve un valor diferente cada vez que se ejecuta

# Por lo tanto, para poder verificar si los valores son iguales (en casos de contraseñas, por ejemplo)
# se usa la función password_verify(), devuelve verdadero o falso en caso de que haya match
echo password_verify($texto, $textoHasheado);

?>