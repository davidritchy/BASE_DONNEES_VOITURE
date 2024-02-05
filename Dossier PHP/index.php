<?php

//j'appelle la classe CRUD
require_once('classes/CRUD.php');
$crud = new CRUD;
$select = $crud->select('client');
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Clients</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="_home.php" class="btn">Home</a>
    <h1>Liste des Clients</h1>
    <div class="container">
        <table>
            <tr>
                <th>Nom client</th>
                <th>Addresse</th>
                <th>Naissance</th>
            </tr>
<?php
        foreach($select as $row){
        ?>
            <tr>
                <td><a href="PHP/client-show.php?id=<?= $row['idclient']?>"><?= $row['nom_client']?></a></td>
                <td><?= $row['addresse_client']?></td>
                <td><?= $row['naissance']?></td>
            </tr>
        <?php
        }
        ?>
        </table>
    </div>
    <br><br>
    <a href="PHP/client-create.php" class="btn">Ajouter</a>
</body>
</html>