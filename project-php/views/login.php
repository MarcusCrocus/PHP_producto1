<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Eventos</title>
</head>
<body>

<?php
if(isset($_SESSION[login]== "true")){
    header("location:../index.php");
}
if(isset($_POST)){
    require_once('../controllers/usuariosController.php');
    $userLisgetAllUsers();
    if($_POST[user]== <NOMBRE DEL USUARIO> && $_POST[password]== <CONTRASEÑA DEL USUARIO>){
        start_session();
        $_SESSION[login]= "true";
        $_SESSION[username]= $_POST[user];
        $_SESSION[role]= $_POST[user];
        header("location:../index.php");
    }
    else{
        echo "<script>alert('Usuario o contraseña incorrecto')</script>"
    }
}
?>

    <form action="login.php" method="post">
        Usuario: <input type="text" name="user" id="">
        </br>
        Contraseña: <input type="password" name="password" id="">
        </br>
        <button type="submit"> Entrar </button>
    </form>
    <p>¿No estas registrado?</p>
    <br>
    <button onclick="location='register.php'">Registrarse</button>


<?php
include footer.php
?>