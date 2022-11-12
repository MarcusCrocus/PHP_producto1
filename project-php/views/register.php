<?php
require_once('conexion.php');

if(isset($_SESSION[login]== "true")){
    header("location:../index.php");
}
if($_POST){
    require_once('../models/user.php');
    require_once('../controllers/usuariosControllers.php');
    //comprobamos si existe un usuario con el mismo username
    $userNameList= getAllUsersNames();
    $exist="false";
    foreach $user in $userNameList}{
        if($POST['usernam' == $user]){
            return $exist= "true";
        }
    }  
    //creamos el usuario si no existe
    if(!$exists){
        $newUser= new user();
        persistUser($newUser);
        echo "<script>alert('Usuario creado, puede iniciar sesion.')</script>"
        header('../login.php');
    }
    else{
        echo "<script>alert('Ya existe un usuario con el nombre seleccionado, escoja otro nombre.')</script>"
    }

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="register.php" method="post">
        <label for="username">Nombre de usuario:</label>
        <input type='text' name='username' id='username'>
        </br>
        <label for="password">Contraseña:</label> 
        <input type='password' name='password' id="password">
        </br>
        <input type="submit">
    </form>
</body>
</html>