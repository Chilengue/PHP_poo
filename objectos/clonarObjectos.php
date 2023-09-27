<?php

class Pessoa
{
    public $idade;

    public function __clone()
    {
            //este metedo e inicializado quando nos chamamos a palavra clone
            echo "clonagem de objectos  ";
    }
}
$pessoa = new Pessoa();
$pessoa->idade = 25;

//clonar objectos
$pessoa = clone $pessoa;
$pessoa->idade = 54;

echo $pessoa->idade;