<?php
require_once('../classes/VOITURE.php');
$crud = new VOITURE;
$select = $crud->select('voiture');
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Voiture</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <a href="../_home.php" class="btn">home</a>
    <h1>Liste de Voitures</h1>
    <div class="container">
        <table>
            <tr>
                <th>Marque de voiture</th>
                <th>Prix Voiture</th>
                <th>Quantite</th>
                <th>Annee</th>
                <th>Id fournisseur</th>
            </tr>
<?php
        foreach($select as $row){
        ?>
            <tr>
                <td><a href="client-show.php?id=<?= $row['idvoiture']?>"><?= $row['marque']?></a></td>
                <td><?= $row['prix']?></td>
                <td><?= $row['quantite']?></td>
                <td><?= $row['annee']?></td>
                <td><?= $row['fournisseur_idfournisseur']?></td>
            </tr>
        <?php
        }
        ?>
        </table>
    </div>
</body>
</html>