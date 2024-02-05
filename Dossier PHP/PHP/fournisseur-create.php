
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
            <form action="fournisseur-store.php" method="POST">
                <h2>New Client</h2>
                <label>Id Fournisseur
                    <input type="number" name="idfournisseur">
                </label>
                <label>Nom Fournisseur
                    <input type="text" name="nom_fournisseur">
                </label>
                <label>addresse Fournisseur
                    <input type="text" name="addresse_fournisseur" >
                </label>
               
               
                <input type="submit" class="btn" value="save">
            </form>
        </div>
    </body>
</html>