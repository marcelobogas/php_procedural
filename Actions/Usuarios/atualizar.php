<?php
session_start();

require_once('../../Database/conexao.php');

if (isset($_POST['btn-atualizar'])) {
    $id = mysqli_escape_string($conn, $_POST['id']);
    $nome = mysqli_escape_string($conn, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conn, $_POST['sobrenome']);
    $email = mysqli_escape_string($conn, $_POST['email']);

    $sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', email = '$email' WHERE id = '$id'";
}

if (mysqli_query($conn, $sql)) {
    $_SESSION['mensagem'] = "Usuário atualizado com sucesso!";
    header('location: ../../Paginas/Usuarios/index.php');
} else {
    $_SESSION['mensagem'] = "Erro ao atualizar usuário!";
    header('location: ../../Paginas/Usuarios/index.php');
}
