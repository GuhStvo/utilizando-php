<?php
echo "<h2>Ex 01:</h2>";
$nome = "Gustavo";
$profissao = "Inovação em tecnologia.";

echo $nome . " trabalho com " . $profissao;
echo "<hr>";

echo "<h2>Ex 02:</h2>";
$senha = "senha123";
if(strlen($senha) > 8) {
    echo "Senha é válida";
} else {
    echo "Senha inválida";
}
echo "<hr>";

echo "<h2>Ex 03:</h2>";
$palavra = "ExEmPlO";
$palavraMin = strtolower($palavra);
echo $palavraMin;
echo "<hr>";

echo "<h2>Ex 04:</h2>";
$link = " http://exemplo.com ";
$linkCerto = trim($link);
echo $linkCerto;
echo "<hr>";

echo "<h2>Ex 05:</h2>";
$string = "abcd123";
$stringReversa = strrev($string);
$posicaoString = strrpos($stringReversa, "3");
echo "A prosição do 3 na string é: " . $posicaoString;