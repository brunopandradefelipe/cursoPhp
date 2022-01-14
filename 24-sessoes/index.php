<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        div {
            display: block;
        }
        button {
            margin-top: 10px;
        }
        .testeForm {
            background-color:cornflowerblue;
            padding: 20px;
            border-radius: 10px;
            margin:auto;
            max-width: 300px;
            align-items: center;
            justify-content: center;
            max-height: 500px;
        }
    </style>
</head>

<body>
    <?php
    if(isset($_POST['send'])){
        session_start();
        $_SESSION['username'] = $_POST['usuario'];
        $_SESSION['password'] = $_POST['senha'];
        header("location: home.php");
        
    }
    ?>
    <div class="testeForm">
    <h1>Login</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div>
            <label for="nameuser">Usuario: </label><br/>
            <input type="text" name="usuario">
        </div>
        <div>
            <label for="passuser">Senha: </label><br/>
            <input type="password" name="senha">
        </div>
        <div>
            <button type="submit" name="send">Enviar</button>
        </div>
    </form>
    </div>
</body>

</html>