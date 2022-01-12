<?php

$idade = 21;
$nome = "Bruno Felipe";

if(($idade === 22) && ($nome === "Bruno Felipe")){
    echo "User exist!";
}else {
    echo "User not exist!";
}

echo "<br/>";

if(($idade === 22) || ($nome === "Bruno Felipe")){
    echo "Verdadeiro!";
}else {
    echo "Falso!";
}
