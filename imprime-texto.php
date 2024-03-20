<?php 

    $nombre = "Simon";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas con PHP</title>
</head>
<body>

    <?php echo "<b>Aprendiendo a integrar PHP con HTML</b>"; ?>

    <?= "<i>Esta es otra forma de imprimir texto y etiquetas con PHP</i>" ?>

    <h1><?= $nombre ?></h1>

</body>
</html>