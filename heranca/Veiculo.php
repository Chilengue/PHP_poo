<?php 

//public e mais pemrecivel
//protected
//private e acessado no escopo da classe

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    private function Andar()
    {
        echo "andou";
    }
    public function Parar()
    {
        echo "parou";
    }

    public function monstrarAcao()
    {
        $this->Andar();
    }
}

    class Carro extends Veiculo
    {
        public function LigarCarro()
        {
            echo "Ligado o rucesta";
        }
    }

    $carro= new Veiculo();
    $carro->monstrarAcao();