<div class="titulo">Operador Ternário</div>

<?php
$idade = 70;
$status;

if($idade >= 18){
    $status = "Maior de idade";
}else{
    $status = "Menor de idade";
}
 echo "$status<br>";
 $idade = 17;
 //Operador ternário é composto pela interrogação e os dois pontos
 $status = $idade >= 18 ? 'Maior de Idade' : 'Menor de idade';
 echo "$status<br>";

 $tipoMaiorIdade = $idade >= 65 ? 'Aposentado' : 'Maior de idade';
 $status = $idade >= 18 ?  $tipoMaiorIdade : 'Menor de idade';