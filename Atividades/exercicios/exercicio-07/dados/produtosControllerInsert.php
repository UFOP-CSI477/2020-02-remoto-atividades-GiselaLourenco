<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Lista de produtos</title>
</head>
<body>
   
   <?php

      require 'connection.php';

      $nome = $_POST['nome'];
      $um =$_POST['um'];

      if(empty($nome) || empty($um)){
         echo '<div><a href="produtosViewInsert.php">Voltar</a></div>';
         die('Insira os dados corretamente');
      }

      try{
         
         $connection->beginTransaction();

         $stmt = $connection->prepare("INSERT INTO produtos (nome, um) VALUES (:nome, :um)");

         $stmt->bindParam(':nome', $nome);
         $stmt->bindParam(':um', $um);

         $stmt->execute();

         $connection->commit();
         header('Location: index.php');
         exit();
      } catch(Exception $e) {
         $connection->rollBack();
         die("Erro ao inserir o produto: " . $e->getMessage());
      }
   ?>
</body>
</html>