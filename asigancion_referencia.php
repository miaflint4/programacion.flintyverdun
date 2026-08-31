<?php

$tetxo="El Salvador";

$variable_1=$tetxo;
$variable_2=&$tetxo;

echo $variable_2 . "<br>";

$tetxo="Carlos Alfaro";

echo $variable_2;
