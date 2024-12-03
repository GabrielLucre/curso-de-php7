<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
            <!-- OBRIGATÓRIO -->
            <input type="file" name="arquivo[]" multiple>
            <input type="submit" value="Enviar" name="enviar-form">
        </form>
    </main>

    <?php
    if (isset($_POST['enviar-form'])) {
        $formatosPermitidos = ["png", "jpeg", "jpg", "gif"];
        // Upload de arquivos multiplo
        $quantArquivos = count($_FILES['arquivo']['name']);
        $cont = 0;

        while ($cont < $quantArquivos) {
            $formato = pathinfo($_FILES['arquivo']['name'][$cont], PATHINFO_EXTENSION);

            if (in_array($formato, $formatosPermitidos)) {
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'][$cont];
                $rename = uniqid() . ".$formato";

                if (move_uploaded_file($temporario, $pasta . $rename)) {
                    echo "<section>";
                    echo "Upload feito com sucesso para $pasta.$rename";
                    echo "</section>";
                } else {
                    echo "<section>";
                    echo "Não foi possível fazer o upload de $temporario";
                    echo "</section>";
                }
            } else {
                echo "<section>";
                echo "$formato não é permitido";
                echo "</section>";
            }
            $cont++;
        }
    }
    ?>
</body>

</html>