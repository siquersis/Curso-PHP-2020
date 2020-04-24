<div class="titulo">Argumenos Variáveis</div>

<?php
function soma($a, $b) {
    return $a + $b;
}

echo soma(14, 15, 6, 7, 8, 9) .'<br>';
echo soma(6, 5, 4) .'<br>';

function somaCompleta(...$numeros) {
    print_r($numeros);
    }

$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array);

function membros($titular, ...$dependentes) {
    echo "Titular: $titular <br>";
    if($dependentes) {
        foreach($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        }
    }
}

echo '<br>';
membros("Ana Silva", "Pedro", "Rafaela", "Amanda");
echo '<br>';
membros("Roberto", "Roberval");