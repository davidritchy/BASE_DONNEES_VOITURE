<?php
if(!isset($_GET['id']) || $_GET['id']==null){
    header('location:../index.php');
    exit;
   }

$id=$_GET['id'];

require_once('../classes/CRUD.php');
$crud = new CRUD;
$selectId = $crud->selectId('client', $id);
extract($selectId);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show Client</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="container">
            <div>
            <a href="../index.php?id=<?= $id; ?>" class="btn">Index</a>
            </div>
            <h1>Client</h1>
            <p><strong>Nom: </strong><?= $nom_client; ?></p>
            <p><strong>Addresse: </strong><?= $addresse_client; ?></p>
            <p><strong>Naissance: </strong><?= $naissance; ?></p>
            <a href="client-edits.php?id=<?= $id; ?>" class="btn">Editer</a>
            <form action="client-delete.php" method="POST">
                <input type="hidden" name="idclient" value="<?= $idclient; ?>">
                <button type="submit" class="btn red">Effacer</button>
            </form>
        </div> 
    </body>
</html>