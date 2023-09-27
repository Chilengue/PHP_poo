<?php
class Veiculo
{
    protected $marca;
    private $cor;
    public $ano;

    public function setmarca($m)
    {
        $this->marca = $m;
    }
    public function getmarca()
    {
        return $this->marca;
    }
    public function Andar()
    {
        echo "andou";
    }

    public function Parar()
    {
        echo "parou";
    }
}

class Carro extends Veiculo
{
    public function LigarLimpar()
    {
        echo "limpado em 321";
    }
}
class Mota extends Veiculo
{
    public function matola()
    {
        echo "matolando";
    }
}

$carro = new Carro();
echo "<br>";
$carro->setmarca(" Toyota");
echo $carro->getmarca();
$carro->cor = " RED ";
$carro->ano = 3467;
$carro->Andar();
$carro->LigarLimpar();
var_dump($carro);


$mota = new Mota();
echo "<br>";
$mota->marca = "BMW";
$mota->cor = "Blue";
$mota->ano = 2013;
$mota->Parar();
$mota->matola();
var_dump($mota);