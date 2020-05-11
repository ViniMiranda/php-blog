<?php

class Comentario extends Database
{
    //variaveis
    private $id;
    private $mensagem;
    private $dataPostagem;
    private $parentId;
    private $usuarioId;
    private $artigoId;

    //construtor
    public function __construct()
    {
        //chamando metodo connect() da classe pai DataBase
        $this->connect();
    }

    public function listAll()
    {
        //query
        $sql = ("SELECT c.mensagem, c.dataPostagem, u.usuario FROM comentario c JOIN artigo a ON c.artigoId = a.id JOIN usuario u ON c.usuarioId = u.id WHERE a.id = ?");

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$this->artigoId]);

        $rows = $stmt->fetchAll(PDO::FETCH_CLASS);
        //pegando a quantidade total de comentarios
        $total = $stmt->rowCount();

        return array($rows, $total);
    }

    public function create()
    {
        $sql = ("INSERT INTO comentarios(id,mensagem,dataPostagem,parentId,usuarioId,artigoId) VALUES(NULL,?,NOW(),?,?,?)");

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$this->mensagem, $this->parentId, $this->usuarioId, $this->artigoId]);
    }

    //getters and setters
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMensagem()
    {
        return $this->mensagem;
    }
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }

    public function getDataPostagem()
    {
        return $this->dataPostagem;
    }
    public function setdataPostagem($dataPostagem)
    {
        $this->dataPostagem = $dataPostagem;
    }

    public function getParentId()
    {
        return $this->parentId;
    }
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }

    public function getUsuarioId()
    {
        return $this->usuarioId;
    }
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;
    }

    public function getArtigoId()
    {
        return $this->artigoId;
    }
    public function setArtigoId($artigoId)
    {
        $this->artigoId = $artigoId;
    }
}
