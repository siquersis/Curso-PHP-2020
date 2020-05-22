<div class="titulo">Interface</div>

<?php

interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero {
    function latir(): string;
}

class Cachorro implements Canino {
    function respirar() {
        echo "Irei usar oxigênio!<br>";
    }

    function latir():string {
        return 'au au';
    }

    function mamar() {
        return "Irei usar leite!";
    }
}
$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->mamar(), '<br>';
echo $animal->latir(), '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro);
echo '<br>';
var_dump($animal instanceof Canino);
echo '<br>';
var_dump($animal instanceof Mamifero);
echo '<br>';
var_dump($animal instanceof Animal);
echo '<br>';