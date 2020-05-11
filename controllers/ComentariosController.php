<?php
require_once("models/ComentarioModel.php");

class ComentariosController
{
    public function listAll()
    {
        $obj = new Comentario();
        $obj->setArtigoId($_GET['id']);
        //pegando objeto no index 0 do array retornado pelo listAll() do model
        $comentarios = $obj->listAll()[0];
        //pegando op numero de registros no index 1 do array retornado pelo lsitaAll() do model
        $contagem = $obj->listAll()[1];

        include(__DIR__ . "/../views/comentarioAll.php");
    }

    public function create()
    {
        $obj = new Comentario();
        $artigos = $obj->create();

        include(__DIR__ . "/../views/comentarioCreate.php");

        if (isset($_POST["mensagem"])) {

            $obj->setId($_POST["titulo"]);
            $obj->create();
        }
    }
}
