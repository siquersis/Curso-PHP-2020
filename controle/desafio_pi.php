<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;

if($pi === pi()) {
    echo 'Iguais','<br';
} else {
    echo 'Diferentes','<br>';
}

//Operador Relacional
$piErrado = 2.8;

//Resposta
echo ($pi - pi()), '<br>';
echo ($pi - $piErrado),'<br>';

if($pi - pi() <= 0.01){
    echo 'Praticamente Iguais!','<br>';
}
if($pi - $piErrado <= 0.01){
    echo 'Praticamente Iguais!','<br>';
}else{
echo 'Valor Errado!','<br>';
}