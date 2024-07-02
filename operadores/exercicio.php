<?php
/* 01 */
/* ------------------------------------ */
$altura = 1.76;
$peso = 69.5;

$IMC = $peso / ($altura * $altura);
echo "Seu IMC é: ". round($IMC, 2) . "<br>";
if ($IMC < 18.5) {
    echo "Seu peso está abaixo do normal.";
} else if ($IMC < 24.9) {
    echo "Seu peso esta normal.";
} else if ($IMC < 29.9) {
    echo "Você está com sobrepeso";
} else {
    echo "Você está obeso.";
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

/* 05 */
/* ------------------------------------ */

/* $num = 91;

$divi_2 = fmod($num, 2);
$divi_3 = fmod($num, 3);
$divi_5 = fmod($num, 5);
$divi_7 = fmod($num, 7);

if ($divi_7 == 0 || $divi_2 == 0 || $divi_5 == 0 || $divi_3 == 0) {
    echo "$num não é primo.";
} else {
    echo "$num é primo.";
} */

function ehPrimo($numero) {
    if ($numero < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Testando a função
$numero = 100;
if (ehPrimo($numero)) {
    echo $numero . " é um número primo.";
} else {
    echo $numero . " não é um número primo.";
}