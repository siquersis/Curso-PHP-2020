<div class="titulo">Valor vs Referência</div>

<?php

$variavel = 'valor inicial';
echo $variavel;

//Atribuição por Valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo "$variavelValor";

//Atribuição por Valor
$variavelReferencia = $variavel;
$variavelReferencia = 'mesma referência';

echo "<br>$variavel $variavelReferencia";