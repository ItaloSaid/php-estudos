<?php
$resto = 0;
for($i = 1; $i <=100; $i++){
    $resto = $i % 2;
    if($resto != 0){
        echo "$i" . PHP_EOL;
    }
}
