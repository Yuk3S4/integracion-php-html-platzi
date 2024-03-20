<?php 

$usuarios = [

    array(
        "id" => 0,
        "username" => "Simón",
    ),
    array(
        "id" => 1,
        "username" => "Willy",
    ),
    array(
        "id" => 2,
        "username" => "Pancho",
    ),

];

$edad = 12;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP a JS</title>
</head>
<body>

    <script>

        let users = JSON.parse('<?= json_encode($usuarios) ?>');
        console.log(users);

        let edad = <?= $edad ?>;
        console.log(edad);

    </script>

    <script src="./index.js"></script>
    
</body>
</html>