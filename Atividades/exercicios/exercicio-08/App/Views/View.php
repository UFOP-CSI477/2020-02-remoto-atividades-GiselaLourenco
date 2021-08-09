<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cidades, Estados e Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="text/css"> 

</head>

<body>

    <div class="table-responsive">
        <h1 class="text-center">Estados</h1>
            <table class="table  table-sm table-bodered table-hover text-center">

                <thead>

                    <tr class="thead-dark">
                        <th>ID</th>
                        <th>Nome do Estado</th>
                        <th>Sigla</th>
                    </tr>

                </thead>

            <tbody>

                <?php

                while ($e = $estado->fetch()) {

                        echo '<tr>';
                        echo '<td>' . $e["id"] . '</td>';
                        echo '<td>' . $e["nome"] . '</td>';
                        echo '<td>' . $e["sigla"] . "</td>";
                        echo '</tr>';
                    }
                ?>


            </tbody>

        </table>

        <div class="table-responsive">
        <h1 class="text-center">Produtos</h1>
            <table class="table  table-sm table-bodered table-hover text-center">

                <thead>

                    <tr class="thead-dark">
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Unidade de medida</th>
                    </tr>

                </thead>
            <tbody>

                <?php

                while ($e = $produto->fetch()) {

                    echo "<tr>" .
                        "<td>" . $e["ID"] . "</td> "
                        . "<td>" . $e["nome"] . "</td> "
                        . "<td>" . $e["um"] . "</td> "
                        . "</tr>";
                }
                ?>

            </tbody>

        </table>

    </div>

</body>

</html>