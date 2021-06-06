<?php
session_start();

require_once('../../Database/conexao.php');
require_once('../../Includes/header.php');
?>

<div class="row">
    <div class="col s6 offset-s3">
        <h4>Cadastrar Usuário</h4>
        <form action="../../Actions/Usuarios/salvar.php" method="POST">
            <div class="input-field col s12">
                <input name="nome" id="nome" type="text" class="validate">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input name="sobrenome" id="sobrenome" type="text" class="validate">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input name="email" id="email" type="email" class="validate">
                <label for="email">E-mail</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="btn-cadastrar">Cadastrar
                <i class="material-icons right">send</i>
            </button>
            <button class="btn waves-effect waves-light blue" type="reset">Cadastrar
                <i class="material-icons right">cancel</i>
            </button>
            <a href="./index.php" class="waves-effect waves-light btn green">
                <i class="material-icons right">home</i>Lista de Usuários
            </a>
        </form>
    </div>
</div>

<?php require_once('../../Includes/footer.php'); ?>