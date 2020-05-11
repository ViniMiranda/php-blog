<?php

class Database
{
    protected function connect()
    {
        //requerindo config.php
        require_once(__DIR__ . "/../config/config.php");

        try {
            //dbh = Database Handle
            $pdo = new PDO(DB, USR, PWD);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;

            echo ('Coneccao estabelecida');
        } catch (PDOException $e) {
            print "Ops, algo deu errado:<br> " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
