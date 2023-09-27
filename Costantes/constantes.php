<?php
    class Pessoa
    {
        const nome= "Jose Orlando";


        public function exibirNome()
        {
            echo self::nome;
            //assim exebimos uma constante em php 
        }
    }

    class Pessoa1 extends Pessoa
    {
        const nome= "Chilengue";

        public function exibirNome()
        {
            echo parent::nome;
            //para refenciar uma constante de uma classe que ela herda os atributos nos usamos parent
        }
    }

    


    $pessoa= new Pessoa();
    $pessoa->exibirNome();
    echo "<br>";

    $pessoa1= new Pessoa1();
    $pessoa1->exibirNome();