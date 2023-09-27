<?php

require 'classes/produto.php';
require 'model/produto.php';


//outra opcao
use Model\Produto as ProdutoModel;
use classes\Produto as ProdutoClass;

//outra opcao
//$produto = new \classes\Produto();
//$produto->monstrarDetalhes();

$produto2= new ProdutoClass();
$produto2->monstrarDetalhes();