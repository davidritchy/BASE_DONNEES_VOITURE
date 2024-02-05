<?php

require_once('../classes/CRUDREGISTRE.php');
$crud = new CRUDREGISTRE;
$insert = $crud->insert('fournisseur', $_POST);

header("location:voiture-create.php?id=$insert");