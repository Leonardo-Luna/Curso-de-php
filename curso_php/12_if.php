<?php

# Si la condición del if() se cumple, se ejecuta el código que esté dentro de sus llaves

$numero = 2;
if($numero == 2) {
    echo $numero . " es igual a 2"; # Se ejecuta 
}

if($numero > 3) {
    echo $numero . " es mayor a 3"; # No se va a ejecutar
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if($numero >= 2) { ?>
    <h1>El número es mayor o igual a 2</h1> <!-- Hacer un if dentro de html -->
<?php } ?>

</body>
</html>