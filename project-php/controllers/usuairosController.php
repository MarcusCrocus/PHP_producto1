<?php
require_once('../config/conexion.php');
require_once('../controllers/usuariosController.php');

public function getAllUsersNames(){
    $conn= connect();
    $query= $conn.prepare('SELECT name FROM users');
    $query->execute();
    return $query->fetchAll();
}

public function getAllUsers(){
    $conn= connect();
    $query= $conn.prepare('SELECT * FROM users');
    $query->execute();
    return $query->fetchAll();
}

public function getUserByName($arg){
    $conn= connect();
    $query= $conn.prepare('SELECT * FROM users where username= $arg');
    $query->execute();
    return $query->fetchAll();
}

public function persistUser($arg){
    $conn= connect();
    $query= $conn.prepare('INSERT INTO users (username, password) VALUES ($arg->getUsername(), md5($arg->getPassword()))');
    $query->execute();
}

?>