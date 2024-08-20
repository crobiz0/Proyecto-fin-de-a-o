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
if(isset($_SESSION['nombre_usuario'])){
$nombre_usuario = $_SESSION['nombre_usuario'];
echo "¡Hola! $nombre_usuario ";
echo "<a href='logeo.php'> Cerrar sesion </a>";

}else{

    echo "no hay datos disponibles.";
}
?>
</h1>


    </div>


</body>
</html>
