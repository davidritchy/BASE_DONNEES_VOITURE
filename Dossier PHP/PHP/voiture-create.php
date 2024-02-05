<?php
if(isset($_GET['id']) && ($_GET['id'] != null)){
    $idfournisseur = $_GET['id'];
    echo $idfournisseur;
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
            <form action="voiture-store.php" method="post">
                <h2>Nouvelle Voiture</h2>
                <label>Marque de la voiture
                    <input type="text" name="marque">
                </label>
                <label>Prix
                    <input type="number" name="prix">
                </label>
                <label>quantite en stock
                    <input type="number" name="quantite">
                </label>
                <label>annee
                    <input type="number" name="annee">
                </label>
                <label>
                    <input type="hidden" name="fournisseur_idfournisseur" value="<?= $idfournisseur; ?>">
                </label>
            
               
                <input type="submit" class="btn" value="save">
            </form>
        </div>
    </body>
</html>