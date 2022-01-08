<?php
$nome = "Bruno Pereira de Andrade Felipe";

$a = 10;
$b = 20;
$c = 30;

function exibeNomes()
{
    global $nome;
    echo $nome;
}

exibeNomes();

echo "<hr/>";

function exibeCidade()
{
    global $cidade;
    $cidade = "Uberaba";
}

exibeCidade();
echo $cidade;

echo "<hr/>";

function soma()
{
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();
