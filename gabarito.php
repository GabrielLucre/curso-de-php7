<?php
// Escopo de variáveis

// Escopo Global
$a = "valor";

function exibirvalor()
{
    // Escopo Local
    // Sem 'global' da erro
    global $a;
    echo $a;
}

exibirvalor();

// Arrays

$array = array(
    "1" => "primeira posição",
    "2" => "segunda posição",
);

// Sintaxe curta
$array = [
    "1" => "primeira posição",
    "2" => "segunda posição",
];

var_dump($array);

// Count - conta a quantidade de elementos do array
echo count($array);

// Array associativo
$pessoa = [
    "nome" => "Gabriel", "idade" => 16, "sexo" => "Masculino", "altura" => 1.66
];
echo $pessoa["cidade"] = "Taquarituba";

foreach ($pessoa as $indice => $valor) {
    echo $indice . " : " . $valor . "<br>";
}

// Array multidimensionais
$times = [
    "cariocas" => ["vasco", "flamengo", "botafogo"],
    "paulistas" => ["são paulo", "santos", "palmeiras"]
];
echo $times["paulistas"][0];

// Funções de Arrays
/*
is_array ($array) = verifica se a variavel é um array
in_array ($valor, $array) = verifica se um valor está em um determinado array
array_keys($array) = retorna as chaves(indices) do array especificado
array_values($array) = retorna os valores do array especificado
array_merge ($array1,$array2) = agrega os conteudos de dois arrays
array_pop ($array) = remove a ultima posicao do array
array_shift($array) = remove a primeira posicao do array
array_unshift($array, "valor") = adiciona um ou mais elementos no inicio do array
array_push($array, $valor, "valor") = adiciona um ou mais elementos no fim do array
array_combine($keys,$values) = mescla os dois arrays em chaves e valores.
array_sum() = calcula a soma dos elementos do array 
explode("/","20/10/2009") = transforma uma string em um array
implode ("separador", $array) = transforma um array em uma string
*/

// Switch Case

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}

// While & Do While 

do {
    # code...
} while ($a <= 10);


while ($a <= 10) {
    # code...
}

// For & Foreach

for ($i = 0; $i < 10; $i++) {
    # code...
}


foreach ($variable as $key => $value) {
    # code...
}

// Funções para Strings
/* strtoupper
   strtolower 
   substr
   str_pad
   str_repeat
   strlen
   str_replace
   strpos
*/

// Funções para números
/*
    number_format
    round
    ceil
    floor
    rand
*/

// Function

function exibirNome($nome)
{
    echo "Meu nome é $nome";
}

exibirNome("Gabriel");

// Superglobais
/*
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

//  