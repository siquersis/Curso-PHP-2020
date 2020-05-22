<div class="titulo">Herança</div>

<?php

class Pessoa {
    public $nome;
    public $idade;
    
    function __construct($nome, $idade) {
        $this->nome  = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';  
    }  

    function __destruct() {
        echo 'Pessoa diz Tchau!!!<br>';
    }    

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos...";
    }
}

//Classe Usuário é extensão da classe Pessoa.
class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        //$this->nome  = $nome;
        //$this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuário Criado!<br>';
    } 
    function __destruct() {
        echo 'Usuário diz: tchau!!!<br>';
        parent::__destruct();
    }
    public function apresentar() {
        echo "Usuário: @{$this->login}. <br>";
        parent::apresentar();//Chama o pai.
    }
}

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();


