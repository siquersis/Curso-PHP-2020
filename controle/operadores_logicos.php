<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>Negação Lógica</p>";
var_dump(true);
echo '<br>';
var_dump(false);
echo '<br>';
var_dump(!true);//not - negação

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);//&& ou and = operador de conjunção E - as duas condições tem que ser verdadeira para retornar verdadeiro.
var_dump(true && false);
var_dump(true && 3 > 2 && 7 <= 7 && 3 === '3');

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true);//|| ou OR = operador de disjunção OU - basta uma das expressões ser verdadeira para retornar verdadeiro. Se as duas forem falso, retornará falso.
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true);//Apenas um deve ser verdadeiro para retornar verdadeiro se for os dois verdadeiros retornará falso e vice e versa.



echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 62;
$sexo = 'F';

if($idade >= 60 && $sexo === 'F'){
    echo "Pode se aposentar -> $sexo";
} else if($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco';
}


