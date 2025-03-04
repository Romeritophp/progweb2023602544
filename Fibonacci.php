<?php

$num1 = 0;
$num2 = 1;

echo $num1 . "\n" . $num2 . "\n";

for ($i = 0; $i <= 2048; $i++) {
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;

    echo $num3 . "\n";
}

?>