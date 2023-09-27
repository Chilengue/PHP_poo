<?php
class Login
{
    public $email;
    public $senha;
    public $nome;

    public  function __construct($email, $senha, $nome)
    {
        $this->nome=$nome;
        $this->setEmail($email);
        $this->setSenha(md5 ($senha));
    }

    public function getNome()
    {
        return $this->nome;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($e)
    {
        //aqui consiguimos filtrar os valors usando o set do php
        $email=filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->mail=$e;
    }

    public function getsenha()
    {
        return $this->senha;
    }

    public function setsenha($s)
    {
        $this->senha=$s;
    }



    public function Logar() {
        if($this->email == "teste@teste.com" and $this->senha== "123456"):
            echo "logado com sucesso";
            else:
                echo "Dados invanlidos";
            endif;
    }
}
$logar =new Login(" teste@teste.com ", " 123456" , " Jose orlando Chilengue ");
// $logar->email= "tetse@teste.com";
// echo "<br>";
// $logar->senha= "123456";
// $logar->setEmail();
//$logar->setsenha("123456");
echo "<br>";
$logar->Logar();
echo $logar->getNome();