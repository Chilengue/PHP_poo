<?php  
class NewSletter
{
    public function cadasTrarEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Este emaile invalido", 1);

        else:
            echo "email cadastrado com sucesso";
        endif;
            
    }
}

$newFiler= new NewSletter();

try {
    $newFiler->cadasTrarEmail("concact@gmail.com");
} catch (Exception $e) {
    //throw $th;
    echo"Mensagem" .$e->getMessage()."<br>";
    echo"codigo" .$e->getCode()."<br>";
    echo"Linha" .$e->getLine()."<br>";
    echo"Arquivo" .$e->getFile()."<br>";
    echo"Mensagem" .$e->getMessage()."<br>";
    echo"Mensagem" .$e->getMessage()."<br>";
}
