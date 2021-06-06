<?php
session_start();

require_once('../../Database/conexao.php');

if (isset($_POST['btn-deletar'])) {
    $id = mysqli_escape_string($conn, $_POST['id']);

    $sql = "DELETE FROM usuarios WHERE id = '$id'";
}

if (mysqli_query($conn, $sql)) {
    $_SESSION['mensagem'] = "Usuário exluido com sucesso!";
    header('location: ../../Paginas/Usuarios/index.php');
} else {
    $_SESSION['mensagem'] = "Erro ao excluir usuário!";
    header('location: ../../Paginas/Usuarios/index.php');
}
