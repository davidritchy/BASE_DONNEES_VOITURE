

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
            <form action="client-store.php" method="POST">
                <h2>New Client</h2>
                <label>Id client
                    <input type="number" name="idclient">
                </label>
                <label>Nom
                    <input type="text" name="nom_client">
                </label>
                <label>Domicile
                    <input type="text" name="addresse_client">
                </label>
                <label>Date de Naissance
                    <input type="text" name="naissance">
                </label>
               
                <input type="submit" class="btn" value="save">
            </form>
        </div>
    </body>
</html>