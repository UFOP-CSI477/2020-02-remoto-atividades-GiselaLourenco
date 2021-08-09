<?php

namespace App\Database;
use PDO;

class AdapterSQLite implements AdapterInterface {

   //Configuração
   public function open (){

        $dbfile = __DIR__ . "/database.sqlite";
        $dbuser = "";
        $dbpassword = "";
        $dbhost = "";

        $strConnection = "sqlite:" . $dbfile;

       $dbConnection = new PDO($strConnection, $dbuser, $dbpassword);

       return $dbConnection;

    }
    
    public function close(){

    }

    public function getEstado($dbConnection){
        
        return $dbConnection->query("SELECT * FROM estados");
    }

    public function getCidade($dbConnection){
        
       return $dbConnection->query("SELECT * FROM cidades");
    }

    public function getProduto($dbConnection){
        
        return $dbConnection->query("SELECT * FROM produtos");
     }
}