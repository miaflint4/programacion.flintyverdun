<?php
$cadena_texto="Hola pao";

$longitud=strlen($cadena_texto);

echo $cadena_texto." tiene ".$longitud." caracteres <br>";
 
$palabras=str_word_count($cadena_texto);
echo $cadena_texto. " tiene " .$palabras." caracteres <br>";