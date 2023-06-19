<?php

$peso = 63;
$altura = 1.73;

$imc = $peso / ($altura ** 2);

echo "Seu IMC é de $imc,você está com o IMC ";
if($imc < 18.5){
    echo "abaixo";
} else if($imc <= 24.9){
    echo "normal";
}else{
    echo "acima";
}

