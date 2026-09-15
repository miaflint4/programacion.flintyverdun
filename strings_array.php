<?php

$fecha_1="2010/03/05";
$fecha_2="2021-03-08";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode ("/",$fecha_1);

echo $array_fecha [0]. "<br>";



$fecha_1="2010/03/05";
$fecha_2="2021-03-08";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode ("-",$fecha_2);

echo $array_fecha [2]. "<br>";


$fecha_1="2010/03/05";
$fecha_2="2021-03-08";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode (" ",$numeros);

echo $array_fecha [6]. "<br>";


$fecha_1="2010/03/05";
$fecha_2="2021-03-08";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode (" ",$numeros,3);

echo $array_fecha [1] . "<br>";



$fecha_1="2010/03/05";
$fecha_2="2021-03-08";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode (" ",$numeros,-2);

echo $array_fecha [4];