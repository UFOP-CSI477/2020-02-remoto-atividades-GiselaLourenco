<?php

    require_once 'connection.php';

   //Controller -> Model
   $produtos = $connection->query("SELECT * FROM produtos");

   //var_dump($estados->fetchAll());

   //View
   //include_once 'estadosView.php';
   require 'produtosView.php';

