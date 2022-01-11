<?php

$nomes = ["Bruno", "Arthur", "João", "Caio"];

// Verificando se é um array

if (is_array($nomes)) {
    echo "É um array";
} else {
    echo "Não é um array";
}

echo "<br/>";
// Verifica se existe um valor no array

if (in_array("Bruno", $nomes)) {
    echo "Existe!";
} else {
    echo "Não é Existe";
}

echo "<br/>";
// Retorna um array com as chaves/indices do array passado

print_r(array_keys($nomes));


