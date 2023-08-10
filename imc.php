<?php 

$altura = 1.78;
$peso = 85;

$imc = $peso / ($altura * $altura);


if($imc < 18.5) {
    echo "Você está com o IMC em $imc, isso representa que você está abaixo do peso ideal." . PHP_EOL;
} elseif($imc > 24.9) {
    echo "Você está com o IMC em $imc, isso representa que você está acima do peso ideal." . PHP_EOL;
} else {
    echo "Você está com o IMC em $imc, isso representa que você está em ótima forma." . PHP_EOL;
}