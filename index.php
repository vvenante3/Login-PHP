<?php

class Animal{
    public $nome;

    public function emitirSom(){
        return "Som Padrão" . $this->nome;
    }
}

class Cachorro extends Animal{
    public function emitirSom(){
        return "Au Au";
    }
}

class Gato extends Animal{
    public function emitirSom(){
        return "Miau";
    }
}

$dog = new Cachorro();
$dog->nome = "Bobi";
$cat = new Gato();
$cat->nome = "Miti";

echo $dog->nome . "diz: " . $dog->emitirSom() . "\n";
echo $cat->nome . "diz: " . $cat->emitirSom();

?>