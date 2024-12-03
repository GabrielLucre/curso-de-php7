<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="style.css">

<body>

    <?php
    /* 
    Validações 
    Funções (filter_input - filter_var)
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_URL

    Sanitização
    Funções (filter_input - filter_var)
    FILTER_SANITIZE_SPECIAL_CHARS
    FILTER_SANITIZE_NUMBER_INT
    FILTER_SANITIZE_EMAIL
    FILTER_SANITIZE_URL
    */
    ?>

    <?php
    if (isset($_POST['enviar'])) {
        // Atribuindo dados
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $url = $_POST['url'];
    }
    ?>

    <main>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php if (isset($nome)) {
                                                        echo $nome;
                                                    } ?>">
            <label for="idade">Idade:</label>
            <input type="number" name="idade" value="<?php if (isset($idade)) {
                                                            echo $idade;
                                                        } ?>">
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php if (isset($email)) {
                                                        echo $email;
                                                    } ?>">
            <label for="url">URL:</label>
            <input type="url" name="url" value="<?php if (isset($url)) {
                                                    echo $url;
                                                } ?>">
            <button type="submit" name="enviar">Enviar</button>
        </form>
    </main>

    <?php
    if (isset($_POST['enviar'])) {
        // Sanitize
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);

        // Array erro
        $erros = [];

        // Validações
        if (empty($nome)) {
            $erros[] = "O campo nome precida ser preenchido";
        }
        if (empty($idade)) {
            $erros[] = "O campo idade precida ser preenchido";
        } else if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
            $erros[] = "Idade precisa ser do tipo inteiro";
        }
        if (empty($email)) {
            $erros[] = "O campo de email precida ser preenchido";
        } else if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            $erros[] = "Email inválido, tente seguir o exemplo (Ex: meuemail@gmail.com)";
        }
        if (empty($url)) {
            $erros[] = "O campo de URL precida ser preenchido";
        } else if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
            $erros[] = "URL inválida";
        }

        // Exibe os erros
        if (!empty($erros)) {
            echo "<section>";
            echo "<ol>";
            foreach ($erros as $erro) {
                echo "<li>";
                echo $erro;
                echo "</li>";
            }
            echo "</ol>";
            echo "</section>";
        } else {
            echo "<section>Parabens, seus dados foram verificados e não há nenhum erro!</section>";
        }
    }

    ?>

</body>

</html>