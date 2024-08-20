
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
<h1>
<?php

session_start();
if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $_SESSION['nombre_usuario'] = $nombre;

    if ($nombre == "nahuel" && $email == "inettinahuel@gmail.com" && $pass == "1234") {
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Credenciales incorrectas";
        echo "<a href='index.php'>Volver</a>";
    }
} else {
    echo "Debes ingresar los datos";
    echo "<a href='index.php'>Volver</a>";
}
?>

</h1>


    </div>
</body>
</html>