<div class="titulo">Foreach</div>

<?php
 $array = [
1=> 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado',];

    foreach ($array as $valor) {
        echo "$valor <br>";
    }

    foreach ($array as $indice => $valor) {
        echo "$indice => $valor <br>";
    }