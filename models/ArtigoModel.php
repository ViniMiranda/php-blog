<?php

require_once(__DIR__ . '/../classes/database.class.php');

class Artigo extends Database
{

    //variaveis
    private $id;
    private $titulo;
    private $conteudo;
    private $dataPostagem;
    private $autorId;

    //construtor
    public function __construct()
    {
        //chamando metodo connect() da classe pai DataBase
        $this->connect();
    }

    //metodos
    public function listAll()
    {

        $sql = ("SELECT a.titulo,a.id FROM artigo a");

        $stmt = $this->connect()->query($sql);

        $rows = $stmt->fetchAll(PDO::FETCH_CLASS);

        return $rows;
    }
    public function read()
    {
        $sql = ("SELECT a.titulo, a.conteudo, a.dataPostagem, u.nome as autor FROM artigo a JOIN usuario u ON a.autorId = u.id WHERE a.id = ?");

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$this->id]);

        $row = $stmt->fetchObject();

        return $row;
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

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getConteudo()
    {
        return $this->conteudo;
    }
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;
    }

    public function getDataPostagem()
    {
        return $this->dataPostagem;
    }
    public function setdataPostagem($dataPostagem)
    {
        $this->dataPostagem = $dataPostagem;
    }

    public function getAutorId()
    {
        return $this->autorId;
    }
    public function setautorId($autorId)
    {
        $this->autorId = $autorId;
    }
}
