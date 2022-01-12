<?php

$a = 10;
$b = 5;
$c = 12;

function soma() {
    
    $result = $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    echo $result;
}

echo "<hr/>";

print_r($_SERVER);