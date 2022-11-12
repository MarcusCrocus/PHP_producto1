<?php

public function connect(){
    $user= 
    $pwd=
    $dbname=
    $dbhost=
    try{
        $connection= new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $user, $pwd);
        return $connection;
    }
    catch(PDOExcepcion $e){
        return print "Error de conexion: ".$e->getMessage();
    }
    
}

?>