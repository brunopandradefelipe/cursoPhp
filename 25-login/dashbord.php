<?php
// Conexao com banco de dados!
require_once './db_connect.php';

session_start();

// Verificação se o usuario logou ou não
if (!$_SESSION['logado'] == true) {
    header('Location: ../25-login');
} else {
    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultados = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultados);
}
mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Seja bem vindo <?php echo $dados['nome']; ?></h1>

    <a href="logout.php">SAIR</a>

</body>

</html>