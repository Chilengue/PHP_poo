<?php
abstract class Banco
{
    protected $saldo;
    protected $limiteCheque;
    protected $jerus;

    public function setSaldo($s)
    {
        $this-> saldo=$s;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
    abstract protected function Levantar($s);


    abstract protected function Deposistar($d);

}

class BCI extends Banco
{
    public function Levantar($s)
    {
        echo " Levantou  ";
        $this->saldo -=$s;
        echo "<hr> levantou " .$s;
    }

    public function Deposistar($d)
    {
        echo " Deposita esse taquinho ";
        $this->saldo +=$d;
        echo "<hr> Depositou: " .$d;
    }
}




$BCi = new BCI();
$BCi->setSaldo(1000);
echo "<hr> Saldo: " .$BCi->getSaldo(); 
$BCi->Levantar(400);
echo "<hr> Saldo:" .$BCi->getSaldo();
$BCi->Deposistar(400);