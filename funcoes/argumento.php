<div class="titulo">Argumento e Retorno</div>

<?php
function obterMensagem() {
    return 'Seja bem vindo(a)!';
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';

var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}
echo '<br>', obterMensagemComNome('Evandro');

function soma($a, $b) {
    $soma = $a + $b;
    return $soma;
}

$x = 4;
$y = 5;
echo '<br>', soma($x,$y);
echo '<br>', soma(45,78);

function trocarValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;