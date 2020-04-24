<div class="titulo">Desafio Palindromo</div>

<?php
function Palindromo($palavra) {
     $ultimoIndice = strlen($palavra) - 1;
     for($i = 0; $i <= $ultimoIndice; $i++) {
         if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
             return 'Não!!!';
         }
     }
     return 'Sim...';
}

echo Palindromo('arara') .' ';
echo Palindromo('ana') .' ';
echo Palindromo('abccba') .' ';
echo Palindromo('bola') .' ';
echo '<br>';

function PalindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim': 'Não...';
}

echo PalindromoSimples('arara') .' ';
echo PalindromoSimples('ana') .' ';
echo PalindromoSimples('abccba') .' ';
echo PalindromoSimples('bola') .' ';