<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restrita</title>
</head>

<body>
    <?php
    // Conexão
    require_once 'db_connect.php';

    // Sessões
    session_start();

    // Verificação
    if (!isset($_SESSION['logado'])) {
        header('Location: index.php');
    }

    // Dados
    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($connect);
    ?>
    <h1>Olá, <?= $dados['nome'] ?>!</h1>
    <a href="logout.php">Sair</a>
</body>

</html>