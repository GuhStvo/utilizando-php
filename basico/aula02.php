<?php
echo "Olá mundo! <br>";
echo "Olá mundo 2 <br>";

$nome = "Gustavo";
$sobreNome = "Almeida";
$nomeCompleto = $nome . " " . $sobreNome ."<br>";
echo $nomeCompleto;
echo "<hr>";

# Para obter o comprimento de um string em php, usamos o strlen()
$texto = "Olá mundo!";
echo strlen($texto);
echo "<hr>";

// Para substituir parte de uma string, usamos a função str_replace()
$texto = "O rato roeu a roupa do rei de roma";
$novo_texto = str_replace("rato", "gato", $texto);
echo $novo_texto;
echo "<hr>";

// Para colocar o texto minusculo ou maiusculo
echo $texto = "Olá mundo! <br>";
$texto_minusculo = strtolower($texto);
$texto_maiusculo = strtoupper($texto);
echo $texto_minusculo;
echo $texto_maiusculo;

// Trim -> Remove espaços em branco no inicio e no final de uma string.
$texto_sem_espaco = trim($texto);
echo strlen($texto_sem_espaco);
echo $texto_sem_espaco;
echo "<hr>";

// strpos - Encontra a primeira posição de uma string especifica,
$lista_alunos = "João, Maria, Jéssica";
$posicao_maria = strpos($lista_alunos, "Maria");
echo "A posição da Maria é: $posicao_maria";
echo "<hr>";

// Reverte a string
$texto = "Gustavo";
$texto_invertido = strrev($texto);
echo $texto_invertido;