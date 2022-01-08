<?php
// Aspas simples não interpretam variaveis, necessario concatenação.
$nome = 'Bruno Pereira';
echo 'Meu nome é $nome';
// Concatenação
echo "<br/>";
echo 'Meu nome é ' . $nome . ' e minha idade é \'21\'';

echo "<hr/>";

// Aspas duplas são interpretativas, ou seja, não precisam concatenar variaveis.

echo "Meu nome é $nome e minha idade é \"21\"";
