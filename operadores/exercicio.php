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

$tem_saldo = true;
$fazer_compra = true;
$valor_compra = 15.50;
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

