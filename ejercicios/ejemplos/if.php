<?php

$a = 100;
$b = 100;

// comparación 1
if($a < $b){
    echo "{$a} es menor a {$b}";
}elseif ($b < $a){
    echo "{$b} es menor a {$a}";
}else{
    echo "{$b} es igual a {$a}";
}
echo "<br>";
// comparacion 2
//! fuente Cascadia code
$c = 17;

if($c >= 60){
    echo "eres un abuel@";
}elseif($c >= 18){
    echo "eres un adulto";
}elseif($c >= 12){
    echo "eres un adolescente";
}else{
    echo "eres un infante";
}