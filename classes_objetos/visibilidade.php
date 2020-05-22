<div class="titulo">Visibilidade</div>

<?php
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "Class a)Publico = {$this->publico}<br>";
        echo "Class a)Protegido = {$this->protegido}<br>";
        echo "Class a)Privado = {$this->privado}<br>";
    }
    public function vaiPorHeranca() {
        echo 'Serei transmitido por herança!<br>';
    }

    private function naoMostrar() {
        echo 'Não vou imprimir!!!<br>';
    }
}

$a = new A();
$a->mostrarA();
//$a->naoMostrar();

class B extends A {
    public function mostrarB() {
        echo "Class B)Publico = {$this->publico}<br>";
        echo "Class B)Protegido = {$this->protegido}<br>";
        echo "Class B)Privado = {$this->privado}<br>";

        parent::vaiPorHeranca();
    }
}
echo "<br>";
$b = new B();
$b->mostrarB();
$b->vaiPorHeranca();