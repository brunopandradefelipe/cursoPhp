<?php
// Constantes, so pode 

define("nome", "Bruno Pereira de Andrade Felipe");
define("idade", 21);
define("altura", 1.80);
define("admin", true);
define("times", ['vasco', 'flamengo', 'botafogo', 'fluminense']);

echo 'Meu nome é ' . nome . ' e minha idade é ' . idade . ' e minha altura é ' . altura . ' sou ' . admin;

echo "<hr/>";

// Percorrendo array de constantes.

for ($i = 0; $i < count(times); $i++) { //count(times) -> indentifica o tamanho do array!!
    echo times[$i], "-";
}

echo "<hr/>";


// Constantes são sempre globais
function exibeNome()
{
    echo nome;
}
exibeNome();

echo "<hr/>";

define("clubes", ["campeao" => "flamengo", "vice" => "Vasco", "Terceiro" => "Botafogo"]);

print_r(clubes);
echo "<hr/>";
var_dump(times);
$nome = "Oscar";
echo "<hr/>";
$nome = "Bom diaaaaa $nome";
