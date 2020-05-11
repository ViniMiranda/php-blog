<?php
require_once("models/ArtigoModel.php");

class ArtigoController
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
        try {
            //checando se tem id  na url
            //se nao tiver mostrar a lista de artigos

            if (is_null($_GET['ArtigoId'])) {
                $this->listAll();
                die();
            } else {
                try {
                    $obj->setId($_GET['ArtigoId']);
                    $artigo = $obj->read();

                    include(__DIR__ . "/../views/artigoRead.php");
                } catch (\Throwable $th) {
                    throw $th;
                }
            }
        } catch (Exception $e) {
            echo ("Ops algo deu errado");
        }
    }
}
