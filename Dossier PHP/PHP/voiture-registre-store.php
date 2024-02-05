<?php

require_once('../classes/REGISTRE.php');
$crud = new REGISTRE;
$insert = $crud->insert('registre', $_POST);

header("location:../_home.php");