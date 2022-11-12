<?php
requier_once('../config/conexion.php');

class user{
    private $id;
    private $username;
    private $password;
    private $role;

    function __construct($user, $pass, $rol='usuario'){
        $this->$username= $user;
        $this->$password= $pass;
        $this->$role= $rol;
    }

    public function getId(){
        return $this->id;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setId(arg){
        $this->id= $id;
    }

    public function setUsername(arg){
        $this->username= $arg;
    }

    public function setPassword(arg){
        $this->password= $arg;
    }


    public function getAllUsers(){
        $conn= connect();
        $query= $conn.prepare('SELECT * FROM users');
        $query->execute();
        return $query->fetchAll(); 
    }

    public function getUserByUsername($arg){.
        $conn= connect();
        $query= $conn.prepare('SELECT $arg FROM users');
        $query->execute();
        return $query->fetchAll();
    }

    public function checkPassword($arg){}
}

?>