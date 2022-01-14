<!DOCTYPE html>
<html lang="en">

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
        <form action="login">
            <div class="block">
                <label for="nome">Insira seu nome:</label>
                <input type="text" placeholder="Insira seu nome" name="nome">
            </div>
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