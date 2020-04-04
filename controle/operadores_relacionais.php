<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1);//true
var_dump(1 > 1);//false
var_dump(1 >= 1);//true
var_dump(4 < 23);//true
var_dump(1 <= 7);//true
var_dump(1 <> 1);//false
var_dump(1 != 1);//false

var_dump(111 == '111');//true
var_dump(111 === '111');//false
var_dump(111 != '111');//false
var_dump(111 !== '111');//true


echo '<p>Relacionais no If/Else</p><hr>';

$idade = 75;
if ($idade < 18) {
    echo "Menor de Idade = $idade<br>";
} else if ($idade <= 65){
    echo "Adulto = $idade<br>";
} else {
    echo "Terceira idade = $idade";
}

echo '<p>Spaceship</p><br>';
var_dump(5 <=> 3);
?>

<style>
p {
    margin-bottom: 0px;
}

hr {
    margin-top: 0px;
}
</style>
