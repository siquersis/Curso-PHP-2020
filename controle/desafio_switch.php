<div class="titulo">Desafio Switch - Conversão</div>

<form action="#" method="post">
   <input type="text" name="param">
   <select name="conversao" id="conversao">
      <option value="km-milha">Km para Milha</option>
      <option value="milha-km">Milha para Km</option>
      <option value="metro-km">Metro para Km</option>
      <option value="km-metro">Km para Metro</option>
    </select>
    <button>Calcular</button>
</form>

<style>
  form > * {
    font-size: 1.8rem;
}
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$param = $_POST['param'] ?? 0;
switch($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
    break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;    
        $mensagem = "$param Milhas = $distancia Km";
    break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia Km";
    break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metros";
    break;
    default:    
        $mensagem = "Nenhum valor a ser calculado!";
}

if($param == ''){
   echo 'Digite um valor para ser calculado!';
}