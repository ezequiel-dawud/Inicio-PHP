<?php 

$idade = 16;
$numeroDePessoas = 2;

echo "Voce só pode entrar se tiver mais de 18 anos." . PHP_EOL;
echo "Ou se você tiver mais de 16 anos e acompanhado de um maior de 18 anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos" . PHP_EOL;
} else if ($idade >= 16 && $numeroDePessoas >= 2) {
    echo "Você tem $idade anos, porem voce poderá entrar, pois esta acompanhado";
    } else {
    echo "Você tem $idade anos, não pode entrar";
}
