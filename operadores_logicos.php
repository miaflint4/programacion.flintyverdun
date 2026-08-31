<?php

$valor_1="7";
$valor_2="2";

$Resultado=!($valor_1>=$valor_2);

var_dump($valor_1==7 && 2>3);

var_dump($valor_1==7 && 9>3); 

var_dump($valor_1==7 OR  1>3); 

var_dump($valor_1==4 OR  1>3 OR $valor_2>10); 

var_dump(!($valor_1==$valor_2));

var_dump($Resultado);