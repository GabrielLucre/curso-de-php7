<?php
$senha = "123456";
$novaSenha = base64_encode($senha);
echo "base64: " . $novaSenha . "<br>";
echo "Sua senha é: " . base64_decode($novaSenha);

echo "<hr>";

echo "md5: " . md5($senha) . "<br>";
echo "sha1: " . sha1($senha);

echo "<hr>";

$options = ['cost' => 5];
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo $senhaSegura . "<br>";

$senha_db = '$2y$10$oeFrpOBTWqovVr0bH35AmuARBQQDRP0QWal3hLjR4DK1C7EAq2XFS';

if (password_verify($senha, $senha_db)) {
    echo "Senha válida";
} else {
    echo "Senha inválida";
}
