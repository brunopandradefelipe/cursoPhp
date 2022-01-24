<?php

$arquivo = "arquivo.txt";
$inserir = "Bruno Pereira\n";
// modo a para escrita
// modo r para leitura
$arquivoAberto = fopen($arquivo, 'r');
//fwrite($arquivoAberto, $inserir);
$tamanhoArquivo = filesize($arquivo);

while(!feof($arquivoAberto)){
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha."<br/>";
}

fclose($arquivoAberto);