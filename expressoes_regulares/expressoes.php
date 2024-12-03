<?php
// Expressões regulares
// ^ inicio da expressão, $ final da expressão - /i - case sensitive
// [] conjunto de caracteres 
// {} ocorrências - ?{0,1} *{0,} +{1,}
// /^[a-z0-9.\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/i
// /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/

// $string = "contato@gmail.com";
// $padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i";

$string = "08/06/2024";
$padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

if (preg_match($padrao, $string)) {
    echo "Válido: [" . $string . "]";
} else {
    echo "Inválido";
}