<?php
// Arrays
$carros = array("Fusca", "Corolla", "Compass", "Renagade", "Gol");
print_r($carros); // print_r usado para mostrar array na tela
echo "<hr/>";
echo $carros[1]; // Acessando um array por posição

// Adicionando elemento no array 

echo "<hr/>";

$carros[] = "HB20";
print_r($carros);

// Outra forma de criar arrays é

echo "<hr/>";

$clientes = ["Bruno", "João", "Felipe"];

print_r($clientes);

echo "<hr/>";

// Exibir a quantidade de elementos que tem em um array

echo count($clientes), "<br/>";

// Percorrendo um array com foreach

echo "<hr/>";

foreach ($carros as $cliente) {
    echo $cliente, "<br/>";
}


echo "<hr/>";
// Arrays associativos

$pessoa = array("nome" => "Bruno", "idade" => 21, "altura" => 1.81);

var_dump($pessoa);

echo "<hr/>";


foreach ($pessoa as $valor) {
    echo $valor, "</br>";
}

// Adicionar um item em um array associativo
echo "<hr/>";

$pessoa["cidade"] = "Uberaba";
echo $pessoa["cidade"];

echo "<hr/>";

// Percorrendo array e indice...

foreach ($pessoa as $indice => $valor) {
    echo $indice . ":" . $valor, "</br>";
}

$times = array(
    "cariocas" => array("campeao" => "flamengo", "vice" => "vasco", "terceiro" => "botafogo", "quanto" => "fluminense"),
    "paulistas" => array("santos", "sao paulo", "palmeiras"),
    "baianos" => array("bahia", "vitoria", "itabuna")
);

echo "<hr/>";

foreach ($times["cariocas"] as $indice => $valor) {
    echo $indice, " : ", $valor, "<br/>";
}

echo "<hr/>";
// Arrays Multidimensionais

$clientes = array(
    "vip" => array("teste" => "Bruno", "teste2" => "Arthur", "Felipe"),
    "novos" => array("Bruno1", "Arthur2", "Felipe3")
);

print_r($clientes);
