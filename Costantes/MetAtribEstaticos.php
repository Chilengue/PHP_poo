<?php

class Login
{
    public static $user;

    public static function VerficarLogin()
    {
        echo "O usuario " .self::$user . " esta logado";

        //this nao funciona com membros estaticos

    }

    public function sairDoSistema()
    {
        echo "O usuario saiu";
    }
}
Login::$user="admim";
Login::VerficarLogin();

$login= new Login();
$login-> sairDoSistema();