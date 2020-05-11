<?php
require_once("models/ArtigoModel.php");

class ArtigosController
{
    //listagem de todos os artigos
    public function listAll()
    {
        $obj = new Artigo();
        $artigos = $obj->listAll();

        include(__DIR__ . "/../views/artigoAll.php");
    }
    //listar um artigo
    public function read()
    {
        $obj = new Artigo();
        $obj->setId($_GET['id']);
        $artigo = $obj->read();

        include(__DIR__ . "/../views/artigoRead.php");
    }
}
