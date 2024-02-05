<?php
require_once('../classes/REGISTRE.php');
$crud = new REGISTRE;
$select = $crud->select('registre');
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <a href="../_home.php" class="btn">home</a>
    <h1>Liste des registres</h1>
    <div class="container">
        <table>
            <tr>
                <th>Date</th>
                <th>Total</th>
                <th>Id Client</th>
                <th>Id Voiture</th>
            </tr>
<?php
        foreach($select as $row){
        ?>
            <tr>
                <td><a href="client-show.php?id=<?= $row['idregistre']?>"><?= $row['date']?></a></td>
                <td><?= $row['total']?></td>
                <td>
                <?=$row['client_idclient']?>    
                </td>
                <td><?= $row['voiture_idvoiture']?></td>
            </tr>
        <?php
                }
        ?>
        </table>
    </div>
</body>
</html>