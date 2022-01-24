<?php
session_start();
require_once './db_connect.php';

if (isset($_POST['delete'])) {
    $id = mysqli_escape_string($connect, $_POST['id']);

    if (empty($id)) {
        echo "<h3 style='color: red'>Cliente inexistente!!</h5>";
    } else {
        $sql = "DELETE FROM clientes WHERE id = '$id'";
        if (mysqli_query($connect, $sql)) {
            $_SESSION['mensagem'] = "Cliente excluido com sucesso!";
            header('Location: ../index.php');
        }else {
            $_SESSION['mensagem'] = "Falha ao excluir cliente!";
            echo "<h3 style='color: red'>Falha ao inserir cliente!</h5>";
        }
    }
} else {
    echo "<h3 style='color: red'>Acesso negado!</h5>";
}