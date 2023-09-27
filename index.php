<?php
class Pessoa{
    public $nome;
    public $idade;
    public $sexo;

    public function Falar ()
    {
        echo $this->nome. " de  " .$this->idade.  " acabou de falar ";
    }
}

$animal= new Pessoa();
// echo get_parent_class($animal); //Pessoa
// var_dump($animal);
$animal->nome="Jose Orlando Chilengue";
$animal->idade=24;
$animal->sexo="Macho";
$animal->Falar();
echo $animal->nome;