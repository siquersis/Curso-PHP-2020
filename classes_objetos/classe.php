<div class="titulo">Primeira Classe</div>

<?php
//Criando classe em PHP
class Cliente {
    //atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar() {
        return "Nome: {$this->nome} Idade: {$this->idade}<br>";
    }
}

$c1 = new CLiente();
$c1->nome = 'Ana Silva';
$c1->idade = 25;
$c1->apresentar();

$c2 = new CLiente();
$c2->nome = 'Gabriel';
$c2->idade = 43;
$c2->apresentar();

echo $c1->apresentar();
echo $c2->apresentar();