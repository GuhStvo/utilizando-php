<?php
/* 01 */
 /* ----------------------------------------------- */
echo "<h2>Ex 01:</h2>";

$nome = "Gustavo";
$profissao = "Inovação em tecnologia.";
echo $nome . " trabalho com " . $profissao;

echo "<hr>";

/* 02 */
 /* ----------------------------------------------- */

echo "<h2>Ex 02:</h2>";

$senha = "senha123";
if(strlen($senha) > 8) {
    echo "Senha é válida";
} else {
    echo "Senha inválida";
}
echo "<hr>";

/* 03 */
 /* ----------------------------------------------- */

echo "<h2>Ex 03:</h2>";

$palavra = "ExEmPlO";
echo strtolower($palavra);

echo "<hr>";

/* 04 */
 /* ----------------------------------------------- */

echo "<h2>Ex 04:</h2>";

$link = " http://exemplo.com ";
$linkCerto = trim($link);
echo $linkCerto;

echo "<hr>";

/* 5 */
 /* ----------------------------------------------- */

echo "<h2>Ex 05:</h2>";

$string = "abcd123";
$stringReversa = strrev($string);
echo "A prosição do 3 na string é: " . strrpos($stringReversa, "3");