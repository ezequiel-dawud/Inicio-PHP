<?php

/* $contador = 0;
while ($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    $contador += 1;
}  
*/

for ($numero = 1; $numero <= 15; $numero++){
    if ($numero == 13) {
       continue;
       //break;
    } else {
        echo "#$numero" . PHP_EOL;
    }
}