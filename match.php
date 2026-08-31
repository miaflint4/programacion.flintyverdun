<?php

$a=7;

$x=10;
$y=9;
$z=7;

$resulatado=match ($a) {
    $x => "valor igual a X" ,
    $y => "valor igual a Y" ,
    $z => "valor igual a Z" ,
    default => "no coincide con ninguna variable"
};

echo $resulatado;