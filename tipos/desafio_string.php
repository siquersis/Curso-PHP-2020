<div class="titulo">Desafio String:</div>

<?php

echo 'Enunciado', '<br>';
echo '<p>Avaliando os métodos da documentação da string,' . 'qual o método que a posição do texto abc na string  !AbcaBcabc retorne 1?</p>', '<br>';
echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';

echo strpos(strtolower('!AbcaBcabc'),strtolower('ABC'));