<div class="titulo">Array</div>

<?php

$lista = array(1, 2, 3.4, "texto");
print_r($lista) . '<br>';

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
var_dump($lista[3000]);
echo '<br>';

$texto = 'Essse é um texto de teste.';
echo '<br>' . $texto[0];
echo '<br>' . $texto[3];
echo '<br>' . $texto[11];
echo '<br>' . mb_substr($texto, 10, 1);