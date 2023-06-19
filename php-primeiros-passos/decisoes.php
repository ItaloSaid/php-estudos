<?php
//uso do match e inteeressante.
$idade = 17;
$numeroDePessoas = 2;

echo "Você so pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18){  //($idade > 18 or $idade = 18); and...
    echo "Voce tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 and $numeroDePessoas >1){
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "Voce tem $idade anos. Você não pode entrar.";
    echo PHP_EOL . "É uma pena";
}

echo PHP_EOL;
echo 'Adeus!';
