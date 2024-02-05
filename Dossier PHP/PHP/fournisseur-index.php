<?php

require_once('../classes/CRUDREGISTRE.php');
$crud = new CRUDREGISTRE;
$select = $crud->select('fournisseur');

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Fournisseurs</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <a href="../_home.php" class="btn">Home</a>
    <h1>Liste des Fournisseurs</h1>
    <div class="container">
        <table>
            <tr>
                <th>Nom fournisseur</th>
                <th>Adresse Fournisseur</th>
            </tr>
<?php
        foreach($select as $row){
        ?>
            <tr>
                <td><a href="PHP/client-show.php?id=<?= $row['idfournisseur']?>"><?= $row['nom_fournisseur']?></a></td>
                <td><?= $row['addresse_fournisseur']?></td>
            
            </tr>
        <?php
        }
        ?>
        </table>
    </div>
</body>
</html>