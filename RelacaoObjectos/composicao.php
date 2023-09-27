<?php

class Pessoa
{
    public function atribuiNome($nome)
    {
        return " O nome da pessoa e: " . $nome;
    }

}

class exibe
{
    public $pessoa;
    public $nome;

    function __construct($name)
    {
        $this->pessoa = new Pessoa();
        $this->nome = $name;
    }

    public function ExibeNome()
    {
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new exibe("Jose");
$exibe->ExibeNome();