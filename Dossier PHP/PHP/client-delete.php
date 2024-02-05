<?php

$id=$_POST['idclient'];
require_once('../classes/CRUD.php');
require_once('../classes/REGISTRE.php');
$crud = new CRUD;
$crud1 = new REGISTRE;

//JE SUPPRIME D'ABORD LA CLE AU REGISTRE ENSUITE AU CLIENT
$delete1 = $crud1->delete('registre',$id,'client-delete.php'); 
$delete = $crud->delete('Client', $id, "../index");
?>