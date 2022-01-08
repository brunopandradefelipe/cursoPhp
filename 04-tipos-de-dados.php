<?php

/* Dados Escalares */

//string

$nome = "Bruno Pereira de Andrade Felipe";
var_dump($nome);

if (is_string($nome)) {
    echo "É uma string";
} else {
    echo "Não é um string";
}

echo "<hr/>";

$idade = 21;
var_dump($idade);

if (is_int($idade)) {
    echo "É um inteiro!";
} else {
    echo "Não é um inteiro";
}

echo "<hr/>";

$altura = 1.81;
var_dump($altura);

if (is_float($altura)) {
    echo "É um float/real!";
} else {
    echo "Não é um float/real";
}

echo "<hr/>";

$booleano = true;
var_dump($booleano);

if (is_bool($booleano)) {
    echo "É um booleano!";
} else {
    echo "Não é um booleano";
}

echo "<hr/>";

$carros = array("Corolla", "Corolla Cross", "Uno", "Gol");
var_dump($carros);

if (is_array($carros)) {
    echo "Isso é um array";
} else {
    echo "Isso não é uma variavel";
}

echo "<hr/>";

class Cliente
{
    public $nome;
    public function atribuirNome($nome)
    {
        $this->$nome = $nome;
    }
}
$cliente = new Cliente();
$cliente->atribuirNome("Bruno Pereira");
var_dump($cliente);

if (is_object($cliente)) {
    echo "Isso é um Objeto";
} else {
    echo "Isso não é um objeto";
}
