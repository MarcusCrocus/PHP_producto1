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
if(isset($_SESSION[login]!= "true")){
    header("location:login.php");
}
?>

</html>