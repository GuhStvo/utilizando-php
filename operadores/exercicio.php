<?php
/* 01 */
/* ------------------------------------ */
$altura = 1.79;
$peso = 69.5;

$IMC = $peso / ($altura * $altura);
echo "Seu IMC é: ". round($IMC, 2) . "<br>";
if ($IMC < 18.5) {
    echo "Seu peso esta abaixo do normal.";
} else if ($IMC < 24.9) {
    echo "Seu peso esta normal.";
} else if ($IMC < 29.9) {
    echo "Você esta com sobrepeso";
} else {
    echo "Você esta obeso.";
}
echo "<hr>";

/* 02 */
/* ------------------------------------ */

$tem_saldo = false;
$fazer_compra = true;
$valor_compra = 255;
$saldo_conta = 19.69;

echo "Usuário tem saldo na conta? ". ($tem_saldo ? "SIM" : "NÃO");
echo "<br>";


echo "Fazer compra? " . ($fazer_compra ? "SIM" : "NÃO");
echo "<br>";

if ($fazer_compra == false) {
    echo "Sistema encerrado";
} else if ($fazer_compra == true) {
    echo "Insira um valor: ";
    echo $valor_compra;
}
echo "<br>";

if ($saldo_conta < $valor_compra && $fazer_compra == true ) {
    echo "Saldo da conta insuficiente.";
} else if ($saldo_conta >= $valor_compra && $fazer_compra == true) {
    echo "Transação concluída.";
} else {
    
}
echo "<hr>";

/* 03 */
/* ------------------------------------ */

$celsius = 17;
$fahrenheit = ($celsius * 9/5) + 32;
echo "Esta fazendo ".$celsius."° graus Celsius. ";
echo "(".$fahrenheit."° em Fahrenheit.) <hr>";

/* 04 */
/* ------------------------------------ */
echo "Para autorização de entrada o usuário deve ser MAIOR DE 18 ANOS e ter AUTORIZAÇÃO DO PAIS. <br>";

$maior_de_idade = true;
$tem_autorizacao = false;

echo "Usuário ". ($maior_de_idade && $tem_autorizacao ? "TEM AUTORIZAÇÃO": "NÃO TEM AUTORIZAÇÃO");
echo "<hr>";

/* 04 */
/* ------------------------------------ */

function numPrimo($num) {
    // Números menores que 2 não são primos
    if ($num < 2) {
        return false;
    }
    
    // Calcula a raiz quadrada do número
    $sqrtNum = sqrt($num);

    // Verifica divisores de 2 até a raiz quadrada do número
    for ($i = 2; $i <= $sqrtNum; $i++) {
        // Se encontrar um divisor, o número não é primo
        if ($num % $i == 0) {
            return false;
        }
    }

    // Se não encontrar nenhum divisor, o número é primo
    return true;
}

// Exemplo de uso
$num = 62;
if (numPrimo($num)) {
    echo "$num é um número primo.";
} else {
    echo "$num não é um número primo.";
}