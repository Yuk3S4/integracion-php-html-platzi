<?php

// echo "<pre>"; 
// var_dump($_POST);
// echo "</pre>";

$nombre = $_POST["nombre"];
$username = $_POST["username"];
$email = $_POST["email"];
$edad = $_POST["edad"];

$htmlentities = htmlentities($nombre);
$addslashes = addslashes($username);
$onlywords = preg_replace("/\d/", "", $username);
$onlynumbers = preg_replace("/\D/", "", $username);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de mi usuario</title>
</head>
<body>
    
    <p>Name</p>
    <?= $htmlentities ?>

    <p>Username:</p>
    <?= $addslashes ?>

    <p>Username sin numeros:</p>
    <?= $onlywords ?>

    <p>Username sin letras:</p>
    <?= $onlynumbers ?>

    <p>Email:</p>
    <?= $email ?>

    <p>Edad:</p>
    <?= $sanitize_int ?>

</body>
</html>