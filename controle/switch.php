<div class="titulo">Switch</div>

<?php
$categoria = '';
$preco = 0.0;
$carro = '';

$categoria = 'luxo';
switch (strtolower($categoria)) {
   case 'LUXO':
   $carro = 'Mercedes';
   $preco = 250000;
   break;
   case 'suv':
   case 'SUV Básico':
   $carro = 'Renegade';
   $preco = 80000;
   break;
   case 'sedan':
   $carro = 'Étios';
   $preco = 55000;
   break;
   default: 
   $carro = 'Mobi';
   $preco = 33000;
   break;
}

$precoFormatado = number_format($preco, 2, ',','.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";
