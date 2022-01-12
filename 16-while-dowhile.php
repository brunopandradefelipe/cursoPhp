<?php

$carros = ["Corolla Cross", "Hb20", "Argo", "Onix", "Fusca", "Creta", "T-Cross"];
$contador = 0;
while($contador < count($carros)){
    echo "$carros[$contador] <br/>";
    $contador++;
}

echo "<hr/>";

$contador = 0;
do {
    echo "$contador <br/>";
    $contador++;
}while($contador < 10);

