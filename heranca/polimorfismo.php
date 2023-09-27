<?php

//Polimorfismo  e suscrever um comportamento da classe pai no classes que herdam o comportamento
///subscrever ou subistir um metedo herdado da superclasse 
class Animal
{
    public function Andar()
    {
        echo "animal andou";
    }

    public function Correr()
    {
        echo "o animal correu";
    }
}
class Cavalo extends Animal
{
    public function Andar()
    {
        echo "ocavalo  andou";
        $this->Correr();
    }
}

$animal = new Cavalo();
$animal->Andar();