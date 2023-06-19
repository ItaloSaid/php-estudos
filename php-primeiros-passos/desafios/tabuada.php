<?php
$multi = 0;
for($i = 1; $i <=9 ; $i++){
    for($j = 1; $j <= 9; $j++){
        $multi = $i * $j;
        echo "$i X $j = $multi" . PHP_EOL;
    }
}
