<?php

    class Animal {
        
        public $nome;
        public $idade;

        public function emitirSom(){

        }
    }

    class Cachorro extends Animal {
        public function emitirSom(){
        echo "AU AU AU";
        }
    }

    class Gato extends Animal{
        function emitirSom(){
           echo "MIAU MIAU MIAU";
       }
   }

    $cachorro = new Cachorro();
    $cachorro->nome = "Pulguento";
    $cachorro->idade = 2;

    $gato = new Gato();
    $gato->nome = "Zoio de Lua";
    $gato->idade = 3;



    echo "Nome Cachorro : " .$cachorro->nome .PHP_EOL;
    echo "Idade Cachorro : " .$cachorro->idade .PHP_EOL;
    echo $cachorro->emitirSom() .PHP_EOL;
    echo str_repeat("-", 40) .PHP_EOL; // Linha separadora
   
    echo "Nome Gato : " .$gato->nome .PHP_EOL;
    echo "Idade Gato : " .$gato->idade .PHP_EOL;
    echo $gato->emitirSom() .PHP_EOL;
    echo str_repeat("-", 40);
?>