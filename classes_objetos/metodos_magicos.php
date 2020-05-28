<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome,$idade) {
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    } 

    function __destruct() {
        echo '<br>E morreu...';
    }
    
    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . '<br>';
    } 

    public function __get($atrib) {
        echo "Lendo atributo não declarado: ($atrib)<br>";
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib} / {$valor}";
    }

    public function __call($metodo, $params) {
        echo "tentando executar método '{$metodo}'";
        echo ", com os parametros ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Ricardo', 40); // __construtor
$pessoa->apresentar();//Chamando o __toString
echo $pessoa, '<br>';//Chamando o __toString
$pessoa->nome = 'Reinaldo';//Acessando valor declarado

//Chama o método diretamente sem o __call
$pessoa->apresentar();//Chamando o __toString

$pessoa->nomeCompleto = 'Muito Legal!!!';//__set
$pessoa->nomeCompleto;// __get

//Acessa o atributo diretamente sem o __get
echo $pessoa->nome;

//__call porque o método não existe no Objeto.
$pessoa->exec(1, 'teste', true, [1, 2, 3]);

$pessoa = null;// __destrutor