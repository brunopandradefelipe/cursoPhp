<?php
session_start();
require_once './db_connect.php';

function clear ($input) {
    global $connect;
    // LIMPADO INPUTS COM SQL INJECTION
    $var = mysqli_escape_string($connect, $input);
    // LIMPANDO INPUTS COM XSS
    $var = htmlspecialchars($var);
    return $var;
}

if (isset($_POST['editar'])) {
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);
    $id = clear($_POST['id']);

    if (empty($nome) || empty($sobrenome) || empty($email) || empty($idade)) {
        echo "<h3 style='color: red'>Existem campos vazios!!</h5>";
    } else {
        $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id';";
        if (mysqli_query($connect, $sql)) {
            $_SESSION['mensagem'] = "Cliente atualizado com sucesso!";
            header('Location: ../index.php');
        }else {
            $_SESSION['mensagem'] = "Falha ao atualizar cliente!";
            echo "<h3 style='color: red'>Falha ao inserir cliente!</h5>";
        }
    }
} else {
    echo "<h3 style='color: red'>Acesso negado!</h5>";
}