<?php 

    $variable = true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    
    <!-- Mala practica -->
    <?php if ( $variable ) {

        echo "<b>true</b>";

    } else {
        
        echo "<b>false</b>";

    }?>

    <!-- Practica aceptable -->
    <?php if ( $variable ) { ?>
        <span>true</span>
    <?php } else { ?>
        <span>false</span>            
    <?php } ?>

    <!-- Buena practica -->
    <?php if ( $variable ): ?>
        <span>true</span>
        
    <?php else: ?>
        <span>false</span>
    <?php endif; ?>

</body>
</html>