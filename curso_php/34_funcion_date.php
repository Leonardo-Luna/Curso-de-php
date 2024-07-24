<?php

date_default_timezone_set("America/Argentina/Buenos_Aires"); # Establece la zona horaria

echo date("d") . "<br/>"; # Retorna el día
echo date("m") . "<br/>"; # Retorna el mes
echo date("y") . "<br/>"; # Retorna el año

echo date("dmy") . "<br/>"; # Retorna día, mes y año pero todo junto (230724)
echo date("d-m-y") . "<br/>"; #Retorna lo mismo pero formateado (23-07-24)
echo date("d/m/Y") . "<br/>"; # (23/07/2024)

echo date("H") . "<br/>"; # Devuelve la hora en formato 24hs
echo date("h") . "<br/>"; # Devuelve la hora en formato 12hs

echo date("h:i:s") . "<br/>"; # Devuelve la hora, minutos y segundos separados por dos puntos ( : )

$fecha_completa = date("d/m/Y - h:i:s");
echo $fecha_completa;

# Lista completa de parámetros posibles
# https://www.php.net/manual/en/datetime.format.php

?>