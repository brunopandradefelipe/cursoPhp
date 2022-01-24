<?php
// Criptografia base64, é um criptografia de mao dupla, ou seja tem função para criptografar e descriptografar!
$senha = "123456";
$novaSenha = base64_encode($senha);
echo "Base64: ".$novaSenha."<br/>";
$novaSenha = base64_decode($novaSenha);
echo "Sua senha é: ".$novaSenha."<br/>";

echo "<hr/>";

// Criptografia de mao unica

echo md5($senha)."<br/>";
echo sha1($senha)."<br/>";

echo "<hr/>";

// Password Hash

$senha2 = "brunusca123";
$senhaSegura = password_hash($senha2, PASSWORD_DEFAULT);
$db_senha = '$2y$10$yJ8kSOA5TwvHh9BO2IuO9ewl5W47Owg.CjCkGau1Uinnga7APOUQu';
if(password_verify($senha2, $db_senha)){
    echo "Senha valida!";
}else {
    echo "Senha invalida!";
}



?>