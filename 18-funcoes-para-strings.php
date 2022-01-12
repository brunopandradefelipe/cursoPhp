<?php

// Deixando string com uppercase
$nome = "bruno pereira de andrade felipe";
$nome = strtoupper($nome);
echo $nome;

echo "<hr/>";

// Deixando string com lowercase
$nome = strtolower($nome);
echo $nome;

echo "<hr/>";

// Repetindo string 
$string = str_repeat("Bruno ", 10);
echo $string;

echo "<hr/>";

// Substituido uma palavra de um texto
$texto = "O Flamengo é bom";
$texto = str_replace("bom", "o melhor", $texto);
echo $texto;
