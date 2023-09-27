<?php
//serve para dfinir um modelo para outras classes usarem

interface Crud
{
    public function Create();
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud
{
    public function Create()
    {
        //logica de criar uma noticia
    }
    public function read()
    {
        //logica de ler uma noticia
    }
    public function update()
    {
        //logica de acualizar uma noticia
    }
    public function delete()
    {
        //logica para deletar uma noticia
    }
}
//todos metemos de uma interface devem ser publicos
