<?php
session_start();

require_once('../../Database/conexao.php');

if (isset($_POST['btn-cadastrar'])) {
    $nome = mysqli_escape_string($conn, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conn, $_POST['sobrenome']);
    $email = mysqli_escape_string($conn, $_POST['email']);

    $sql = "INSERT INTO usuarios (nome, sobrenome, email) VALUES ('$nome', '$sobrenome', '$email')";
}

if (mysqli_query($conn, $sql)) {
    $_SESSION['mensagem'] = "Usuário cadastrado com sucesso!";
    header('location: ../../Paginas/Usuarios/index.php');
} else {
    $_SESSION['mensagem'] = "Erro ao cadastrar usuário!";
    header('location: ../../Paginas/Usuarios/index.php');
}
