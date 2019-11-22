<?php
echo "Van welk getal wil je de faculteit weten?"  . PHP_EOL;
$n = readline(">");
$f = 1;
$x = $n;
while($x >= 1) {
    $f = $f * $x;
    $x--;
}
echo "Factuliteit van $n is $f";

