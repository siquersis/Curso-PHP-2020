<div class="titutlo">Operações com Array</div>

<?php
$dados1 = [
    "nome" => "José",
    "idade" => 28 
];

$dados2 = [
    "naturalizade" => "Fortaleza",
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos[$indice]}";

unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);
unset($dadosCompletos);

echo '<br>';

$impares = [1, 3, 5, 7, 9] ;
$pares = [2, 4, 6, 8];

$decimais = $pares + $impares;
print_r($decimais);

$decimais = array_merge($pares, $impares);
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);