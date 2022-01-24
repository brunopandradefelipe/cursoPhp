<?php
date_default_timezone_set('America/Sao_paulo');
echo date('d/m/Y H:i:s');
echo "<hr/>";
echo date('d/m/Y H:i:s');


$aniversario = [07, 11, 2000];
$aniversario = date('d/m/Y', 07112000);
echo $aniversario;