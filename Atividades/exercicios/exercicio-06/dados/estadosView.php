<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Lista de Estados</title>
</head>
<body>
    <div class="table-responsive">
    <table class="table  table-sm table-bodered table-hover text-center">
        <thead>
            <tr class="thead-dark">
                <th>ID</th>
                <th>Nome do Estado</th>
                <th>Sigla</th>
                </tr>
            </thead>

            <?php
                while($e = $estados->fetch()){
                    echo '<tr>';
                    echo '<td>' . $e["id"] . '</td>';
                    echo '<td>' . $e["nome"] . '</td>';
                    echo '<td>' . $e["sigla"] . "</td>";
                    echo '</tr>';
                }
            ?>
    </table>
    </div>
</body>
</html>