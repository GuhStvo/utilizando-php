<?php

$num1 = 10;
$num2 = 5;

$soma = $num1 + $num2;
$subtracao = $num1 - $num2;
$multiplicacao = $num1 * $num2;
$divisao = $num1 / $num2;


// Operadores Incrementais e decrementais.

$num = 8;
echo "Número: $num <hr>";
$num++;
$num++;
echo "Incremento: $num <hr>";

$num--;
echo "Decremento: $num <hr>";

// Operadores de Comparação
$num1 = 4;
$num2 = 4;

if($num1 == $num2) {
    echo "Verdadeiro";
} else {
    echo "Falso";
}
echo "<hr>";

$resultado = $num1 == $num2;
echo "Igual a: $resultado <hr>";

// Ternário
// Condição ? true : false

echo "Igual a: ";
    /*  Condição */   /* if */       /* else */
echo $num1 == $num2 ? "Verdadeiro" : "Falso";
echo "<hr>";

// Diferente de...
echo " Diferente de: ";
echo $num1 != $num2 ? "Verdadeiro" : "Falso <hr>";

// Maior que...
echo "Maior que: ";
echo $num1 > $num2 ? "Verdadeiro" : "Falso <hr>";

// Menor ou igual a...
echo "Menor ou igual a: ";
echo $num1 <= $num2 ? "Verdadeiro" : "Falso";
echo "<hr>";

// Operadores Lógicos
$condicao1 = true;
$condicao2 = false;

// Logico e (AND)
echo "E lógico ";
echo $condicao1 && $condicao2 ? "Verdadeiro" : "Falso <hr>";

// Logico Ou (OR)
echo "Ou lógico ";
echo $condicao1 || $condicao2 ? "Verdadeiro" : "Falso <hr>";
echo "<hr>";

// Não Lógico (NOT)
echo "Não lógico: ";
echo !$condicao1 || $condicao1 ?
"verdadeiro <hr>" : "falso <hr>";

// Operadores com Booleanos
// && (AND)
$tem_idade = true;
$tem_cartao = false;

$pode_entrar = $tem_idade && $tem_cartao;
echo "Pode entrar na festa: ". ($pode_entrar ? "PUEDE 👍😁" : "NO PUEDE 👎😥") . "<hr>";

// || (OR)
$tem_passaporte = true;
$tem_visto = false;

$pode_entrar = $tem_passaporte || $tem_visto;
echo "Pode viajar: ". ($pode_entrar ? "PUEDE VIAJAR 👍😁🛫" : "NO PUEDE VIAJAR 👎😥🛬") . "<hr>";

// Número Decimais (Floats)
$altura = 1.75;
$peso = 69.5;

$IMC = $peso / ($altura * $altura);
echo "Seu IMC é: ". round($IMC, 2); 