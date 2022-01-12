<?php 

// Tabuada de 8
echo "Tabuada<br/>";
for($i=0; $i<=10; $i++){
    echo "8 x $i = ".(8*$i)."<br/>";
}

// Foreach
echo "<hr/>";

$cores = ["Verde", "Vermelho", "Azul", "Amarelo", "Roxo"];

foreach($cores as $indice => $valor){
    echo "$indice = $valor <br/>";
}