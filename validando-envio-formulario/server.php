<?php

// $nombre = $_POST["nombre"];

// if ( isset($nombre) && !empty($nombre)) {
//     echo "Hola $nombre";
// }
// else {
//     echo "No se mandó nada";
// }

if ( isset($_POST["form"]) ) {
    echo "Todo el formulario fue mandado";
}
else {
    echo "No se mandó ningún formulario";
}