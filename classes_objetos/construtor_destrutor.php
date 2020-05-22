<div class="titulo">Construtor e Destrutor</div>

<?php
 class Pessoa {
     public $nome;
     public $idade;

     function __construct($novoNome, $idade) {
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade= $idade;
     }
     function __destruct() {
         echo 'E morreu!!!<br>';
     }

     public function apresentar() {
         echo "{$this->nome}, {$this->idade} anos<br>";
     }
}
//$pessoa = new Pessoa(); Problema

$pessoaA = new Pessoa('Rebeca Maria', 40);
$pessoaA->apresentar();
unset($pessoaA);//Unset chama o destrutor.

echo '<br>';

$pessoaB = new Pessoa('João Pedro', 13);
$pessoaB->apresentar();
$pessoaB = null;
