<?php

function mostraNome () {
    $nome = "Bruno Pereira de Andrade Felipe";
    echo $nome;

}

mostraNome();

echo "<hr/>";

function mediaNota ($nome ,$nota1, $nota2, $nota3) {
    $result = ($nota1 + $nota2 + $nota3) / 3;
    $result = number_format($result, 2, '.', '');
    echo "Aluno: $nome, resultado final = $result";
}

mediaNota("Bruno Pereira de Andrade Felipe", 6, 7, 10);