<div class="titulo">Variáveis variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a}";

echo '<br>';
$epa = 'opa';
$epa = 'vish';
echo "$epa ${$epa}";