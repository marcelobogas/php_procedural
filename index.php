<?php
session_start();

require_once('./Database/conexao.php');
require_once('./Includes/header.php');
?>

<div class="row">
    <div class="col s6 offset-s3">
        <h4>Cadastros</h4>
        <a href="./Paginas/Usuarios/index.php" class="btn">Usuários</a>
    </div>
</div>

<?php require_once('./Includes/footer.php'); ?>
