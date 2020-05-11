<?php
require_once("models/ComentarioModel.php");

class ComentarioController
{
    public function listAll()
    {
        $obj = new Comentario();
        $obj->setArtigoId($_GET['ArtigoId']);
        //pegando objeto no index 0 do array retornado pelo listAll() do model
        $comentarios = $obj->listAll()[0];
        //pegando op numero de registros no index 1 do array retornado pelo lsitaAll() do model
        $contagem = $obj->listAll()[1];

        include(__DIR__ . "/../views/comentarioAll.php");
    }

    public function create()
    {
        $obj = new Comentario();

        include(__DIR__ . "/../views/comentarioCreate.php");

        if (isset($_POST["mensagem"])) {

            $obj->setArtigoId($_GET["ArtigoId"]);
            $obj->setMensagem($_POST['mensagem']);
            $obj->create();
        }
    }
}
