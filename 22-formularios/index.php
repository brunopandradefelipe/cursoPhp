<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para GET e POST</title>
</head>
<body>
    <form action="./dados.php" method="GET">
        <label for="usuario">Informe o usuario:</label>
        <input type="text" name="username" id="user">
        <label for="senha">Informe a senha:</label>
        <input type="password" name="password" id="pass">
        <input type="submit" value="Enviar">
    </form>

    <a href="./dados.php?nome=Bruno&senha=teste123">click aqui</a>
</body>
</html>