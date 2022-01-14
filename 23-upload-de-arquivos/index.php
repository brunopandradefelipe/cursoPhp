<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
</head>

<body>
    <?php
    if(isset($_POST['envia'])){
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
        if(in_array($extensao, $formatosPermitidos)){
            $pasta = "arquivo/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novoNome = uniqid().".$extensao";
            if(move_uploaded_file($temporario, $pasta.$novoNome)){
                echo "<alert>UPLOAD FEITO COM SUCESSO</alert>";
            }else {
                echo "<alert>FALHA NO UPLOAD</alert>";
            }
        }else {
            echo "Formato Invalido!";
        }
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo"><br/>
        <button type="submit" name="envia">Enviar</button>
    </form>
</body>

</html>