<?php
$a = 3;

for($i = 1; $i <= $a; $i++) {
    echo "<p style='color:red;'>Corredor {$i}</p>";
    for($j = 1; $j <= 3; $j++) {
        echo " <p style='color:blue;'>Corredora {$j}</p>";
    }
}
?>