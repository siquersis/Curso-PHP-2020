<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;//Toda variável inicia com símbolo do cifrão ($).
echo var_dump($numeroA),'<br>'; 

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);//isset verifica se há uma variável setada.

unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;


//Nomenclaturas de variáveis
$var = 'válida!';
$var2 = 'válida!';
$VAR3 = 'válida!';
$_var_4 = 'válida!';
$var5 = 'válida';
//$6var = 'inválida...';
//$%var7 = 'inválida...';
//$var8% = 'inválida...';
?>