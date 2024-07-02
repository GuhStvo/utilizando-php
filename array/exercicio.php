<?php
/* EX 001 */
$diasSemana = array("Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado", "Domingo");
echo "<b>Dias da semana: </b>";

foreach($diasSemana as $diaSemana) {
    echo " $diaSemana | ";
}
echo "<br>";
echo "<b>Terceiro dia da semana: </b>" . $diasSemana[2];

echo "<hr>";

/* EX002 */
$mesesAno = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
echo "<br>";
foreach($mesesAno as $mes) {
    echo " $mes | ";
}
echo "<br>";
echo "<b>Último valor alterado: </b>";
echo "<br>";
$mesesAno[11] = "Onzembro";

foreach($mesesAno as $mes) {
    echo " $mes | ";
}

echo "<hr>";


/* EX003 */

$adicionarNum = array(1, 2, 3, 4, 5);
echo "<b>Lista: </b>";
echo "<br>";
foreach($adicionarNum as $numeros) {
    echo " $numeros | ";
}
echo "<br>";
echo "<b>Adicionando valor: </b>";
echo "<br>";
$adicionarNum[] = 6;
foreach($adicionarNum as $numeros) {
    echo " $numeros | ";
}

echo "<hr>";


/* EX004 */
echo "<b>Meses do ano: </b>";
echo "<br>";
$mesesAno[11] = "Dezembro";

foreach($mesesAno as $mes) {
    echo " $mes | ";
}

/* EX005 */

echo "<hr>";

echo "Existem " . "<b>" .count($diasSemana) . "</b>" .  " Elementos no array de dias da semana.";

echo "<hr>";

/* EX006 */

echo 'A posição do "Sábado" no array de dia da semana é: ' .  array_search("Sábado", $diasSemana);
?>