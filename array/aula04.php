<?php
echo "<h2>Declarações de array's:</h2>";
echo "<br>";

$frutas = array("Maçã", "Banana", "Laranja", "Morango");

print_r($frutas);
echo "<hr>";

$numeros = [2,2,6,9];
print_r($numeros);
echo "<hr>";

$alunos = array("João" => 18, "Maria" => 20, "Pedro" => 19);
print_r($alunos);
echo "<hr>";

// acessando elementos
echo "A segunda fruta é: $frutas[1] <br>";
echo "O terceiro número é: $numeros[2] <br>";
echo "A idade de João é :" . $alunos["João"]. "<br>";

// Alteração de elementos
$frutas[0] = "Pera";
print_r($frutas);
echo "<br>";

$numeros[4] = 100;
print_r($numeros);
echo "<br>";

$alunos["Maria"] = 21;
$alunos["Ana"] = 21;
print_r($alunos);
echo "<br>";

/* push */
$frutas[] = "Abacaxi"; 
print_r($frutas);
echo "<br>";

$numeros[] = 93;
print_r($numeros);
echo "<br>";

$alunos["José"] = 25;
print_r($alunos);
echo "<hr>";

// Percorrendo pelos elementos
echo "Lista de frutas: ";
foreach($frutas as $fruta) {
    echo "<li>$fruta</li>";
}
echo "<br>";

echo "Lista de números: ";
foreach($numeros as $numero) {
    // Escreva a lista de números.
    echo "<li>$numero</li>";
}
echo "<br>";

echo "Lista de idades: ";
foreach($alunos as $nome => $idade) {
    // Escreva a lista de números.
    echo "<li>$nome tem $idade anos.</li>";
}
echo "<br>";

// Funções úteis para arrays

/* Quantidade de dados em um array ".count($seuArrayAqui)" */
echo "Números de elementos no array de fruta é: " . count($frutas) . "<br>";
/* Indice de um array "arrat_search($seuArrayAqui)" */
echo "Índice de fruta 'Laranja': " . array_search("Laranja", $frutas) . "<br>";

/* Último dado de um array "end($seuArrayAqui)" */
echo "Última fruta do array: " . end($frutas) . "<br>";

print_r($frutas);
echo "<br>";
/* Reverter array "array_reverse($seuArrayAqui)" */
echo "Array de frutas depois de reverter";
$frutas_revertida = array_reverse($frutas);
print_r($frutas_revertida);
?>