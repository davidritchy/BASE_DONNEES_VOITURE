<?php
if(isset($_GET['id']) && $_GET['id']!=null ){
    $id= $_GET['id'];

    require_once('../database/conex.php');
    $sql = "SELECT * FROM Client WHERE idClient = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($id));

    $count = $stmt->rowCount();

    if($count == 1){
        $client = $stmt->fetch();
        foreach($client as $key => $value){
            $$key = $value;
        }
    }else{
        header('location:../index.php');
    }
}else{
    header('location:../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Edit</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="client-update.php" method="POST">
            <input type="hidden" name="idclient" value="<?= $id; ?>">
            <h2>Client Edit</h2>
            <label>Name
                <input type="text" name="nom_client" value="<?= $nom_client; ?>">
            </label>
            <label>Address
                <input type="text" name="addresse_client" value="<?= $addresse_client; ?>">
            </label>
            <label>Naissance
                <input type="text" name="naissance" value="<?= $naissance; ?>">
            </label>
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
</body>
</html>