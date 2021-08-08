<?php

require '../vendor/autoload.php';


use App\Database\Connection;
use App\Database\AdapterSQLite;


    $dbConnection = new Connection(new AdapterSQLite());

    $connection = $dbConnection->getAdapter()->open();
    $cidade = $dbConnection->getAdapter()->getCidade($connection);
    $estado = $dbConnection->getAdapter()->getEstado($connection);
    $produto = $dbConnection->getAdapter()->getProduto($connection);

    require_once '../App/Views/View.php';
   