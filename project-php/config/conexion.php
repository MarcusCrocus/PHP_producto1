<?php
function connect(){
    $user= "root";
    $pwd= "rootPass1234";
    $dsn='mysql:host=db;port=db;dbname=wordpress3';
    $options= [];
    try{
        $conn= new PDO($dsn, $user, $pwd, $options);
        return $conn;
    }
    catch(PDOException $e){
        exit("Error: ". $e->getMessage());
    }
}
?>