<?php

class Productos
{
    public $name;
    public $valor;

    function __construct($name, $valor)
    {
        $this->name = $name;
        $this->valor = $valor;
    }
}

class Carrinho
{
    public $produtos;
    public function adicionar(Productos $produto)
    {
        $this->produtos[] = $produto;
    }

    public function exibe()
    {
        foreach ($$this->produtos as $produto) {
            echo $produto->name . '<br>';
            echo $produto->valor . '<br>';
        }
    }
}


$produto1 = new Productos("Notbock", "1500");
$produto2 = new Productos("Notbock", "1500");

$carinho = new Carrinho();
$carinho->adicionar($produto1);
$carinho->adicionar($produto2);

$carinho->exibe();