<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizando datos de un formulario</title>
</head>
<body>

    <form action="server.php" method="post" enctype="multipart/form-data">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="username">Username:</label>
        <input type="text" name="username" id="username">

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">

        <label for="edad">Edad:</label>
        <input type="text" name="edad" id="edad">

        <button type="submit">Mandar formulario</button>

    </form>

</body>
</html>