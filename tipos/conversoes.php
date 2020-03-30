<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);

//int para float

echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float)3);

//float para int
echo '<p>Float para int</p>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval('11010101101',10));