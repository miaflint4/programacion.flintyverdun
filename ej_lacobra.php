<?php


$notas=0;
$examen=5;
$trabajo=5;
$fixture=5;

$notas= ($examen+$trabajo+$fixture)/3;

if ($notas > 6) {
    echo "Mariano no se lleva la materia a diciembre";
} else {
    echo "Mariano se lleva la materia a diciembre con Alan Acosta";
    }

    if ($notas=5) {
    echo "Mariano debe rendir en el periodo de intensificacion de contenidos";
}

    


