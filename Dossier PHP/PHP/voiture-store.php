<?php

require_once('../classes/VOITURE.php');
$crud = new VOITURE;
$insert = $crud->insert('voiture', $_POST);
header("location:voiture-registre.php?id=$insert");


