<div class="titulo">Desafio - Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve","Cinderela"];

$index = array_rand($nomes);
echo "<div center><h1>$nomes[$index]</div></h1>";

?>

<style>
[center]{
    display: flex;
    justify-content: center;
}
</style>