<?php
if(isset($_GET['id']) && ($_GET['id'] != null)){
    $idvoiture = $_GET['id'];
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
    <body>
        <div class="container">
            <form action="voiture-registre-store.php" method="post">
                <h2>Nouvelle Voiture</h2>
                <label>ID Registre
                    <input type="number" name="idregistre">
                </label>
                <label>Date
                    <input type="date" name="date">
                </label>
                <label>Total
                    <input type="number" name="total">
                </label>
                <label>Id Client
                    <input type="number" name="client_idclient">
                </label>
                <label>
                    <input type="hidden" name="voiture_idvoiture" value="<?= $idvoiture?>">
                </label>
                <input type="submit" class="btn" value="save">
            </form>
        </div>
    </body>
</html>