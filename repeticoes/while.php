<div class="titulo">While e DoWhile</div>

<?php

const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE) {
    echo "While $contador <br>";
    $contador++;
}

echo '<hr>';

$contador = 0;
 do {
    echo "DoWhile $contador <br>";
    $contador++;
} while($contador < VALOR_LIMITE);

$contador = 0;
while(true) {
   echo "While(true) $contador <br>";
   if($contador >= VALOR_LIMITE) {
    break;
                 }
};