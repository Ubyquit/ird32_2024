<?php 
/*
! 1 x 1 = 1
! 1 x 2 = 2
! 1 x 3 = 3
*/

$t_i = 5; // tabla incial
$t_f = 10; // tabla final
$r_i = 1; // rango inicial
$r_f = 3; // rango final

for($i = $t_i; $i <= $t_f; $i++){
    echo "Tabla del {$i}<br>";
    for($j = $r_i; $j <= $r_f; $j++){
        $multiplicacion = $i * $j;
        echo "{$i} x {$j} = {$multiplicacion}<br>";
    }
}

?>
