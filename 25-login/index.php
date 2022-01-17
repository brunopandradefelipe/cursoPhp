<?php
// Conexao com banco de dados!
require_once './db_connect.php';

session_start();

if (isset($_POST['enviar'])) {
    $erros = [];
    // Armazenando os dados do POST
    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if (empty($usuario) || empty($senha)) {
        $erros[] = "<li style='color:red'>O campo login/senha precisa ser preenchido!</li>";
    } else {
        $sql = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
        $resultados = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultados) > 0){
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
            // query envia o select  e armazena na variavel resultados
            $resultados = mysqli_query($connect, $sql);
            // verificando o numero de linha de resultados, para ver se o usuario existe
            if (mysqli_num_rows($resultados) == 1){
                $dados = mysqli_fetch_array($resultados);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: dashbord.php');
            }else {
                $erros[] = "<li style='color:red'>Senha incorreta!</li>";
            }
        } else {
            $erros[] = "<li style='color:red'>Usuario inexistente!</li>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Curso PHP</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
        }

        .block {
            display: block;
            margin-top: 20px;
        }

        label {
            display: block;
            text-align: left;
            margin-left: 10%;
            font-weight: 700;
            font-size: 17px;
            color: rgba(0, 0, 0, 0.7);
        }

        .background {
            background-color: greenyellow;
            max-width: 400px;
            max-height: 400px;
            border-radius: 20px;
            box-shadow: 10px black;
            margin: auto;
            padding: 20px;
            text-align: center;
            min-width: 200px;
            margin-top: 150px;
        }

        input {
            height: 40px;
            border-radius: 10px;
            width: 80%;
            padding-left: 10px;
            outline: 0;
            border: 0px;
        }

        button {
            margin-top: 20px;
            padding: 10px;
            width: 80%;
            font-weight: 700;
            font-size: 20px;
            cursor: pointer;
        }

        h1 {
            font-weight: bold !important;
            font-size: 30px;
            text-align: left;
            margin-left: 5%;
            padding: 20px;
            color: green;
            text-decoration: underline;
            font-size: clamp(1em, 1em + 1vw, 1.5em);
        }
    </style>
</head>

<body>

    <div class="background">
        <h1>Login usuario</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <?php
            if (!empty($erros)) {
                foreach ($erros as $erro) {
                    echo $erro;
                }
            }
            ?>
            <div class="block">
                <label for="usuario">Insira seu usuario:</label>
                <input type="text" placeholder="Insira seu usuario" name="usuario">
            </div>
            <div class="block">
                <label for="senha">Insira sua senha:</label>
                <input type="password" placeholder="Insira seu senha" name="senha">
            </div>
            <button type="submit" name="enviar">Enviar</button>

        </form>
    </div>
</body>

</html>