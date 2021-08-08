<?php

namespace App\Database;

interface AdapterInterface{

    public function open();
    public function close();
    public function getEstado($dbConnection);
    public function getCidade($dbConnection);
    public function getProduto($dbConnection);

}