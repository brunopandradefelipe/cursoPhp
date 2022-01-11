<?php
/*
* Condicionais
* IF
* ELSE
* ELSEIF
* OPERADOR TERNARIO
*/

$numero = 11;
if ($numero == 7) {
    echo "Numero é igual 7";
} elseif ($numero == 10) {
    echo "Numero é igual a 10";
} else {
    echo "Número não é igual a 7 e nem 10";
}

echo "<hr/>";

$media = 4;
echo ($media >= 7) ? "Aprovado!" : "Reprovado";

echo "<hr/>";

/*
* Condicionais
* Switch
* Case
* Default
*/

$cor = "rosa";

switch ($cor) {
    case "vermelho":
        echo "Sua cor preferida é o vermelho";
        break;
    case "verde":
        echo "Sua cor preferida é o verde";
        break;
    case "amarelo":
        echo "Sua cor preferida é o amarelo";
        break;
    default:
        echo "Cor não reconhecida";
        break;
}
