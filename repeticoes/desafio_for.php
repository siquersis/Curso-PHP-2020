<div class="titulo">Desafio For</div>

<?php
$impressao = '';
   for($cont = 1;$cont <= 5; $cont++) {
       $impressao .= '#';
       echo   "$impressao <br>";
   }

   for(
       $impressao2 = '#';
       $impressao2 !== '######';
       $impressao2 .= '#'
       
    ){
        echo "$impressao2 <br>";
    };