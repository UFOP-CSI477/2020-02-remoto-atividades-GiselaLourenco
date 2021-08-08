<?php

    $name = $_POST['nome'];
    $adress= $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $contact = $_POST['contato'];

    //Controller
    echo "<h1>Informações cadastradas</h1>";
    echo "<p>Nome: $name</p>";
    echo "<p>Endereço: $adress</p>";
    echo "<p>CPF: $cpf</p>";
    echo "<p>Contato: $contact</p>";

    echo '<a href="index.php">Voltar</a>';