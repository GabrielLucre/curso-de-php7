<?php
// Sessão
session_start();

if (isset($_SESSION['mensagem'])) {
?>

    <!-- Script -->
    <script>
        // Mensagem
        window.onload = function() {
            M.toast({
                html: '<?= $_SESSION['mensagem'] ?>'
            })

        }
    </script>

<?php
}
session_unset();

// Conexão
include_once 'php_action/db_connect.php';

// Header
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m8 push-m2">
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) > 0) {
                    while ($dados = mysqli_fetch_array($resultado)) {
                ?>
                        <tr>
                            <td><?= $dados['nome'] ?></td>
                            <td><?= $dados['sobrenome'] ?></td>
                            <td><?= $dados['email'] ?></td>
                            <td><?= $dados['idade'] ?></td>
                            <td><a class="btn-floating orange" href="editar.php?id=<?= $dados['id'] ?>"><i class="material-icons">edit</i></a></td>
                            <td><a class="btn-floating red modal-trigger" href="#modal<?= $dados['id'] ?>"><i class="material-icons">delete</i></a>

                                <!-- Modal Structure -->
                                <div id="modal<?= $dados['id'] ?>" class="modal">
                                    <div class="modal-content">
                                        <h4>Opa!</h4>
                                        <p>Tem certeza que deseja excluir esse cliente?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="php_action/deletar.php" method="post">
                                            <input type="hidden" name="id" value="<?= $dados['id'] ?>">
                                            <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                        </form>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <br>
        <a class="btn" href="adicionar.php">Adicionar cliente</a>
    </div>
</div>

<?php

// Footer
include_once 'includes/footer.php';
?>