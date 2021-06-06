<?php
session_start();

require_once('../../Database/conexao.php');
require_once('../../Includes/header.php');

if (isset($_SESSION['mensagem'])) { ?>
    <script>
        window.onload = function() {
            M.toast({
                html: '<?php echo $_SESSION['mensagem']; ?>'
            });
        }
    </script>
<?php }
session_unset();
?>

<div class="row">
    <div class="col s8 offset-s2">
        <h4>Usuários</h4>
        <table class="highlight">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>E-mail</th>
                    <th>
                        <a href="./cadastrar.php" class="waves-effect waves-light btn">
                            <i class="material-icons right">add</i>Cadastrar
                        </a>
                    </th>
                    <th>
                        <a href="../../index.php" class="waves-effect waves-light btn blue">
                            <i class="material-icons right">home</i>HOME
                        </a>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM usuarios";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($usuario = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $usuario['nome']; ?></td>
                            <td><?php echo $usuario['sobrenome']; ?></td>
                            <td><?php echo $usuario['email']; ?></td>
                            <th>
                                <a href="./editar.php?id=<?php echo $usuario['id']; ?>" class="btn-floating btn-sm waves-effect waves-light orange">
                                    <i class="material-icons">edit</i>
                                </a>
                            </th>
                            <th>
                                <a href="#modal<?php echo $usuario['id']; ?>" class="btn-floating btn-sm waves-effect waves-light red modal-trigger">
                                    <i class="material-icons">delete</i>
                                </a>
                            </th>

                            <!-- Modal Structure -->
                            <div id="modal<?php echo $usuario['id']; ?>" class="modal">
                                <div class="modal-content">
                                    <h4>Excluir Usuário</h4>
                                    <p>Tem certeza que deseja excluir esse usuário?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="../../Actions/Usuarios/excluir.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
                                        <button type="submit" name="btn-deletar" class="btn red">Sim, quero excluir</button>
                                        <a href="#!" class="modal-close waves-effect waves-blue blue btn-flat">Cancelar</a>
                                    </form>
                                </div>
                            </div>
                        </tr>
                <?php
                    }
                } else { ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                <?php }  ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once('../../Includes/footer.php'); ?>