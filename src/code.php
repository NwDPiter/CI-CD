<?php

// Função para calcular o fatorial de um número
function fatorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * fatorial($n - 1);
    }
}

// Função para verificar se um número é primo
function isPrimo($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Função para verificar se um número é primo usando a função fatorial
function isPrimoFatorial($num) {
    return fatorial($num - 1) % $num == ($num - 1);
}

// Função para verificar se uma palavra é um palíndromo
function isPalindromo($str) {
    $str = strtolower(str_replace(' ', '', $str));
    return $str == strrev($str);
}

// Função para converter uma string para camelCase
function toCamelCase($str) {
    $str = ucwords(strtolower($str));
    $str = str_replace(' ', '', $str);
    $str = lcfirst($str);
    return $str;
}

// Função para calcular o máximo divisor comum (MDC) de dois números
function mdc($a, $b) {
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}

// Função para gerar um número aleatório dentro de um intervalo
function randIntervalo($min, $max) {
    return rand($min, $max);
}

// Testando as funções

$num = 5;
echo "O fatorial de $num é: " . fatorial($num) . "\n";

$num = 7;
echo "$num é primo? " . (isPrimo($num) ? "Sim" : "Não") . "\n";

$num = 7;
echo "$num é primo usando fatorial? " . (isPrimoFatorial($num) ? "Sim" : "Não") . "\n";

$str = "Ame a ema";
echo "$str é um palíndromo? " . (isPalindromo($str) ? "Sim" : "Não") . "\n";

$str = "ola mundo como esta";
echo "Camel case de \"$str\" é: " . toCamelCase($str) . "\n";

$a = 24;
$b = 36;
echo "MDC de $a e $b é: " . mdc($a, $b) . "\n";

$min = 10;
$max = 50;
echo "Número aleatório entre $min e $max é: " . randIntervalo($min, $max) . "\n";

?>
