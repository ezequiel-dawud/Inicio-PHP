<?php 

$numero = 1;

/* while ($numero <= 100) { 
    $resto = $numero % 2;
    if($resto == 0) {
        echo "$numero" . PHP_EOL;
    }
$numero += 1;   
} */

for ($contador = 1; $contador <= 100; $contador++) {
    if ($contador % 2 != 0) {
        echo $contador . PHP_EOL;
    }
}