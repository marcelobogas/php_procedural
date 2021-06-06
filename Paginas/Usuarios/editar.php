<?php
session_start();

require_once('../../Database/conexao.php');
require_once('../../Includes/header.php');

if (isset($_GET['id'])){
    $id = mysqli_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $usuario = mysqli_fetch_array($result);
}
?>

<div class="row">
    <div class="col s6 offset-s3">
        <h4>Atualizar Usuário</h4>
        <form action="../../Actions/Usuarios/atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

            <div class="input-field col s12">
                <input name="nome" id="nome" type="text" class="validate" value="<?php echo $usuario['nome']; ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input name="sobrenome" id="sobrenome" type="text" class="validate" value="<?php echo $usuario['sobrenome']; ?>">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input name="email" id="email" type="email" class="validate" value="<?php echo $usuario['email']; ?>">
                <label for="email">E-mail</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="btn-atualizar">Atualizar
                <i class="material-icons right">send</i>
            </button>
            <a href="./index.php" class="waves-effect waves-light btn green">
                <i class="material-icons right">home</i>Lista de Usuários
            </a>
        </form>
    </div>
</div>

<?php require_once('../../Includes/footer.php'); ?>