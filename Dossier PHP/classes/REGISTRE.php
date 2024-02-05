<?php
//CLASSE DE REGISTRE
class REGISTRE extends PDO {
    public function __construct() {
        parent::__construct('mysql:host=localhost; dbname=voiture; port=3306; charset=utf8', 'root', '');
    }

    public function select($table, $field = 'idregistre', $order = 'ASC'){
        $sql = "SELECT * FROM $table ORDER BY $field $order";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

    public function selectId($table, $value, $field='idregistre', $url='_index' ){
        $sql = "SELECT * FROM $table WHERE $field = :$field";

        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count == 1){
            return $stmt->fetch();
        }else{
            header("location:$url.php");
            exit;
        }   
    }

    public function insert($table, $data){
        $fieldName = implode(', ', array_keys($data));
        $fieldValue = ":".implode(', :', array_keys($data));
        $sql = "INSERT INTO $table ($fieldName) VALUES ($fieldValue)";
        $stmt = $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();

       return $this->lastInsertId();
    }

    public function update($table, $data, $field = 'idregistre'){
        $fieldName = null;
        foreach($data as $key=>$value){
            $fieldName .= "$key = :$key, ";
        }
        $fieldName = rtrim($fieldName, ', ');

        $sql = "UPDATE $table SET $fieldName WHERE $field = :$field";

        $stmt = $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count==1){
            // header('Location: ' . $_SERVER['HTTP_REFERER']);
            header('Location:../_index.php');
        }else{
            print_r($stmt->errorInfo());
        }
    }


    public function delete($table, $value, $url, $field='idregistre'){
        $sql = "DELETE FROM $table WHERE $field = :$field";
        //return $sql;
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count==1){
            header("location:$url.php");
        }else{
            print_r($stmt->errorInfo());
        }   
    }
 }