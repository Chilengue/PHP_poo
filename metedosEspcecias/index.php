<?php 

        class Pessoa 
        {
            // private $nome;

            private $dados=array();

            public function __set($nome, $valor )
            {
                $this->dados[$nome]=$valor;
            }

            public function __get($nome)
            {
                // return $this->nome
                return $this-> dados[$nome];
            }

            //toString();
            public function __toString()
            {
                return  "Tentei impremir o nome e nome nao saiu";
            }
            public  function __invoke()
            {
                return " Objecto  como funcao ";
            }
        }

        $pesessoa= new Pessoa();
        $pesessoa->nome = "Danilo";
        $pesessoa->idade=50;
        $pesessoa->sexo="M";

        echo $pesessoa->idade. "<br>";
        echo $pesessoa->nome;